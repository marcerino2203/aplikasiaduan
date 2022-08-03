<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_controler extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		if ($this->session->userdata('akses') != "admin") {
			redirect('login_controler');
		};
	}
	public function index()
	{
		$data['warga'] = $this->admin_model->get_warga();
		$data['pegawai'] = $this->admin_model->get_pegawai();
		$this->load->view('admin/user/index', $data);
	}
	public function register_user()
	{
		$this->load->view('admin/user/register_user');
	}
}
