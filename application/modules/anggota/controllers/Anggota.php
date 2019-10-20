<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('anggota/anggota_m', 'anggota');
	}

	public function index()
	{
		$data['querys'] = $this->anggota->getAllAnggota();
		$data['title'] = 'Data Anggota';
		$data['header'] = 'Inputs Data Anggota';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'Data Anggota';
		$data['header'] = 'Inputs Data Anggota';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('add');
		$this->load->view('templates/footer');
	}

	public function save()
	{
		$anggota = $this->anggota;
		$validation = $this->form_validation;
		$validation->set_rules($anggota->_rules());

		if ($validation->run() == False) {
			$anggota->save();
			$this->session->set_flashdata('msg', '<div class="alert alert-success
					alert-dismissible
					fade show" role="alert">
					Data anggota berhasil ditambahkan
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('anggota');
		}else{
			// $data = $anggota->getAllAnggota();
			redirect('anggota');
		}
	}

	public function edit($id=null)
	{
		$data['querys'] = $this->anggota->getAnggotaById($id);
		$data['title'] = 'Edit Data Anggota';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('EditAnggota', $data);
		$this->load->view('templates/footer');
	}

	public function update($id=null)
	{
		$anggota = $this->anggota;
		$validation = $this->form_validation;
		$validation->set_rules($anggota->_rules());

		if ($validation->run() == TRUE) {
			$anggota->update();
			$this->session->set_flashdata('msg', '<div class="alert alert-success
					alert-dismissible
					fade show" role="alert">
					Data anggota berhasil diubah
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('anggota');
		}else{
			// $data = $anggota->getAllAnggota();
			redirect('anggota');
		}
	}

	public function delete($id=null)
	{
		$anggota = $this->anggota;
		if ($anggota->delete($id)) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger
				alert-dismissible
				fade show" role="alert">
				Data anggota berhasil dihapus
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('anggota');
		}
	}
}

/* End of file Anggota.php */
/* Location: ./application/modules/anggota/controllers/Anggota.php */