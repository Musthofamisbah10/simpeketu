<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Jabatan extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('jabatan/jabatan_m');
		}
	
		public function index()
		{
			$data['querys'] = $this->jabatan_m->getAllJabatan();
			$data['title'] = 'Data Jabatan';
			$data['header'] = 'Inputs Data Jabatan';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('index', $data);
			$this->load->view('templates/footer');
		}

		public function add()
		{
			$jabatan = $this->jabatan_m;
			$validation = $this->form_validation;
			$validation->set_rules($jabatan->rules());

			if ($validation->run()) {
				$jabatan->save();
				$this->session->set_flashdata('msg', '<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em> Data jabatan berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button></div>');
				redirect('jabatan');
			}else{
				redirect('jabatan');
			}
		}

		public function update($id=null)
		{
			$jabatan = $this->jabatan_m;
			$validation = $this->form_validation;
			$validation->set_rules($jabatan->rules());

			if ($validation->run() == TRUE) {
				$jabatan->update();
				$this->session->set_flashdata('msg', '<div class="alert bg-success" role="alert"><em class="fa fa-check-circle mr-2"></em> Data jabatan berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button></div>');
				redirect('jabatan');
			}else{
				redirect('jabatan');
			}
		}

		public function delete($id=null)
		{
			$jabatan = $this->jabatan_m;
			if ($jabatan->delete($id)) {
				$this->session->set_flashdata('msg', '<div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"	"></em> Data berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
					</button></div>');
				redirect('jabatan');
			}
		}
	
	}
	
	/* End of file Jabatan.php */
	/* Location: ./application/modules/jabatan/controllers/Jabatan.php */
 ?>