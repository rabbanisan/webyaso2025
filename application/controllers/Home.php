<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		// $this->load->view('komponen/navbar', $data);
		$this->load->view('komponen/navbar-tailwind');
		$this->load->view('home/home.php');
		// $this->load->view('home/index', $data);
		// $this->load->view('komponen/footer', $data);
	}
	public function profile()
	{
		$data['title'] = 'Profile SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Profile/index', $data);
		$this->load->view('komponen/footer', $data);
	}
}
