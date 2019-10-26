<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pengurus');
		$this->load->view('templates/footer');
	}

}

/* End of file Pengurus.php */
/* Location: ./application/modules/pengurus/controllers/Pengurus.php */