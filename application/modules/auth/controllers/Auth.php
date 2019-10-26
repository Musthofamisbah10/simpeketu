<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Login Admin"	;
		$this->load->view('admin_template/header', $data);
		$this->load->view('auth');
		$this->load->view('admin_template/footer');
	}

	public function auth()
	{
		
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */