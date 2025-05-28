<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
		public function __construct() {
			parent::__construct();
			date_default_timezone_set("Asia/Jakarta");
		}
		/* the rest of your code... */
	public function index()
	{
		$this->form_validation->set_rules('Nama', 'Nama', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',[ 'max_lenght'=>'maximal 25 huruf', 'required'=>'Nama Tidak Boleh Kosong', 'regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('namaOrtu', 'namaOrtu', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 25 huruf', 'required'=>'Nama Orang Tua Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('asek', 'asek', 'required|max_length[25]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 25 huruf', 'required'=>'Asal Sekolah Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required|max_length[13]|regex_match[/^[A-Za-z0-9\s]+$/]',['max_length'=>'maximal 13 huruf', 'required'=>'Nomer Telepon Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required|regex_match[/^[A-Za-z0-9\s]+$/]',['required'=>'Alamat Tidak Boleh Kosong','regex_match'=>'tidak boleh mengandung simbol']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'PPDB SMK Yadika Soreang';
			$this->load->view('PPDB/header', $data);
			$this->load->view('PPDB/ppdb', $data);
			$this->load->view('PPDB/footer', $data);
		}else{
			$data = [
			'Nama' => htmlspecialchars($this->input->post('Nama')),
			'alamat' => htmlspecialchars($this->input->post('alamat')),
			'nama_ortu' => htmlspecialchars($this->input->post('namaOrtu')),
			'asek' => htmlspecialchars($this->input->post('asek')),
			'no_hp' => "+62".$this->input->post('no_hp'),
			'jenis_kelamin' => $this->input->post('JK'),
			'agama' => $this->input->post('agama'),
			'jurusan' => $this->input->post('jurusan'),
			'tahun'=>DATE('Y'),
			'ket'=>0
		];
		$this->session->set_flashdata('success_message', 'Data siswa berhasil ditambahkan.');
		$this->db->insert('siswa',$data);
		redirect('Ppdb');	
		}
	}
	public function tambah_data()
	{
	}
} 