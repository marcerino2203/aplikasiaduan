<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_controler extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('daftar_model');
    }
	public function index()
	{
		$this->load->view('daftar/index');
	}
	public function add_data()
	{
		echo $this->input->post('nik');
		echo "halo";
		$data=array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('nomor_telepon'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		if($this->daftar_model->add($data)){
			redirect('home_controler');
		}
		// $this->daftar_model->add($data);
	}
}
