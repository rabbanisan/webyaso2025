<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$ci = get_instance();
			if (!$ci->session->userdata('email')) {
				redirect('Auth');
			}
			date_default_timezone_set("Asia/Jakarta");
		}
		/* the rest of your code... */
		public function index(){
			$tahun = DATE('Y');
		   $data['siswa'] = $this->db->query("SELECT COUNT(*) as siswa FROM siswa WHERE tahun = $tahun")->result_array();
		   $data['RPL'] = $this->db->query("SELECT COUNT(*) as RPL FROM siswa WHERE tahun = $tahun AND jurusan = 'RPL'")->result_array();
		   $data['AK'] = $this->db->query("SELECT COUNT(*) as AK FROM siswa WHERE tahun = $tahun AND jurusan = 'AK'")->result_array();
		   $data['AP'] = $this->db->query("SELECT COUNT(*) as AP FROM siswa WHERE tahun = $tahun AND jurusan = 'AP'")->result_array();
		   $data['terima'] = $this->db->query("SELECT COUNT(*) as terima FROM siswa WHERE tahun = $tahun AND ket = 1")->result_array();
		   $data['title'] = 'SMK Yadika Soreang';
			$this->load->view('komponen/header1', $data);
			$this->load->view('komponen/navbar', $data);
			$this->load->view('Admin/index', $data);
		}
	public function data()
	{
		$tahun = DATE('Y');
       $data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', ['tahun'=>$tahun]);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/data_siswa', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function rpl()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'RPL', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/rpl', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function AK()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'AK', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/Ak', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function AP()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'AP', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/AP', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function download(){
 // Create new Spreadsheet object

	 }
	// public function tambah_data()
	// {
	// 	$agama = "";
	// 	if($this->input->post('agama') == 'lainnya'){
	// 		$agama = $this->input->post('agama_l');
	// 	}else{
	// 		$agama = $this->input->post('agama');
	// 	}
	// 	$sumber = "";
	// 	if($this->input->post('sumber')=='lainnya'){
	// 		$sumber = $this->input->post('sumber');
	// 	}else{
	// 		$sumber = $this->input->post('sumber_l');
	// 	}
	// 	$this->form_validation->set_rules('nisn', 'Nisn', 'required');
	// 	$this->form_validation->set_rules('Nama', 'Nama', 'required');
	// 	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	// 	$this->form_validation->set_rules('namaOrtu', 'namaOrtu', 'required');
	// 	$this->form_validation->set_rules('asek', 'Asek', 'required');
	// 	$this->form_validation->set_rules('no_hp', 'No_hp', 'required');
	// 	$this->form_validation->set_rules('JK', 'JK', 'required');
	// 	$this->form_validation->set_rules('Jurusan', 'Jurusan', 'required');
	// 	$data = [
	// 		'nisn' => htmlspecialchars($this->input->post('nisn')),
	// 		'Nama' => htmlspecialchars($this->input->post('Nama')),
	// 		'alamat' => htmlspecialchars($this->input->post('alamat')),
	// 		'nama_ortu' => htmlspecialchars($this->input->post('namaOrtu')),
	// 		'asek' => htmlspecialchars($this->input->post('asek')),
	// 		'no_hp' => $this->input->post('no_hp'),
	// 		'jenis_kelamin' => htmlspecialchars($this->input->post('JK')),
	// 		'agama' => $agama,
	// 		'sumber' => $sumber,
	// 		'jurusan' => $this->input->post('jurusan'),
	// 	];
	// 	$this->db->insert('siswa',$data);
	// }
	public function hapus($id){
		$where = ['id_siswa'=>$id];
		$this->db->delete('siswa',$where);
		redirect('Admin');
	}
	public function terima($id){
		$data = array(
			'ket'=>1,
		);
		$where = array(
			'id_siswa' => $id,
		);
		$this->db->update('siswa', $data, $where);
		redirect('Admin/data');
	}
	public function wawancaras($id){
		$data = array(
			'wawancara'=>1,
		);
		$where = array(
			'id_siswa' => $id,
		);
		$this->db->update('siswa', $data, $where);
		redirect('Terima');
	}
	public function no_terima($id){
		$data = array(
			'ket'=>2,
		);
		$where = array(
			'id_siswa' => $id,
		);
		$this->db->update('siswa', $data, $where);
		redirect('Admin/data');
	}
	public function update_nominal(){
		$nominal = $this->input->post('new_value');
		$status = ($nominal >= 1500000) ? 1 : 0;
			$data = array(
				'nominal'=>$nominal,
				'ket'=>$status
			);
		$where = array(
			'id_siswa' => $this->input->post('id'),
		);
		$this->db->update('siswa', $data, $where);
		redirect('Admin/data');
	}
	public function edit($id){
		$where = array(
			'id_siswa' => $id,
		);
		$this->form_validation->set_rules('Nama', 'Nama', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',[ 'max_lenght'=>'maximal 25 huruf', 'required'=>'Nama Tidak Boleh Kosong', 'regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('namaOrtu', 'namaOrtu', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 25 huruf', 'required'=>'Nama Orang Tua Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('asek', 'asek', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 25 huruf', 'required'=>'Asal Sekolah Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required|max_length[13]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 13 huruf', 'required'=>'Nomer Telepon Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required|regex_match[/^[A-Za-z0-9\s]+$/]',['required'=>'Alamat Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		if ($this->form_validation->run() == FALSE) {
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $where);
		$data['title'] = 'PPDB SMK Yadika Soreang';
		$this->load->view('PPDB/header', $data);
			$this->load->view('Admin/edit', $data);
		}else{
			update();
		}
	}
		public function update(){
		$id = $this->input->post('id');
			$data = [
			'Nama' => htmlspecialchars($this->input->post('Nama')),
			'alamat' => htmlspecialchars($this->input->post('alamat')),
			'nama_ortu' => htmlspecialchars($this->input->post('namaOrtu')),
			'asek' => htmlspecialchars($this->input->post('asek')),
			'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('JK'),
			'agama' => $this->input->post('agama'),
			'jurusan' => $this->input->post('jurusan'),
			'nominal' => $this->input->post('nominal'),
			'tahun'=>DATE('Y'),
			'ket'=>1
		];
		$where = array('id_siswa'=>$id);
		$this->session->set_flashdata('success_message', 'Data siswa berhasil ditambahkan.');
		$this->db->update('siswa',$data,$where);
		redirect('Admin/data');	
		}
	}