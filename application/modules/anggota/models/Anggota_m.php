<?php 
	
	/**
	 * 
	 */
	class Anggota_m extends CI_Model
	{
		private $_table = 'anggota';
		
			public $id_anggota;
			public $kode_anggota;
			public $nama_anggota;
			public $password;
			// public $photo;

		public function _rules()
		{
			return [
				[
					'field'	=> 'nama_anggota',
					'label'	=> 'nama anggota',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'username',
					'label'	=> 'username',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'password',
					'label'	=> 'password',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'kode_anggota',
					'label'	=> 'kode anggota',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'agama',
					'label'	=> 'agama',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'jabatan',
					'label'	=> 'jabatan',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'alamat',
					'label'	=> 'alamat',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'univ',
					'label'	=> 'universitas',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'tempat_lahir',
					'label'	=> 'tempat lahir',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'tanggal_lahir',
					'label'	=> 'tanggal lahir',
					'rules'	=> 'required'
				],
				[
					'field'	=> 'kelamin',
					'label'	=> 'kelamin',
					'rules'	=> 'required'
				],
			];
		}

		private function _uploadAnggota()
		{
			$config['upload_path'] 		= './uploads/anggota/';
			$config['allowed_types'] 	= 'jpg|png|jpeg';
			$config['max_size']  		= '2048';
			$config['file_name']       = $this->nama_anggota;
			$config['overwrite']			= true;
			$config['remove_space'] 	= TRUE;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('photo_anggota')) {
				return $this->upload->data("file_name");
			}else{
				// return $this->upload->display_errors();
				print_r($this->upload->display_errors());
			}
		}

		private function _deleteAnggota($id)
		{
		    $anggota = $this->getAnggotaById($id);
		    if ($anggota->photo_anggota != "default.jpg") {
			    $filename = explode(".", $anggota->photo_anggota)[0];
				return array_map('unlink', glob(FCPATH."uploads/anggota/$filename.*"));
		    }
		}

		public function save()
		{
			$post = $this->input->post();
			$this->kode_anggota = $post['kode_anggota'];
			$this->nama_anggota = $post['nama_anggota'];
			$this->password = sha1($post['password']);
			// $this->photo = $this->_uploadAnggota();

			// echo "<pre>";
			// var_dump($this);
			// echo "</pre>";
			
			$this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			$this->$username = $post['username'];
			$this->password = sha1($post['password']);
			$this->kode_anggota = $post['kode_password'];
			$this->$tempat_lahir = $post['tempat_lahir'];
			$this->$tanggal_lahir = $post['tanggal_lahir'];
			$this->$kelamin = $post['kelamin'];
			$this->agama = $post['agama'];
			$this->jabatan = $post['jabatan'];
			$this->alamat = $post['alamat'];
			$this->univ = $post['univ'];

			if (!empty($_FILES["photo_anggota"]["name"])) {
			    $this->image = $this->_uploadImage();
			} else {
			    $this->image = $post["old_anggota"];
			}

			$this->db->update($this->_table, $this, array('id_anggota' => $post['id_anggota']));
		}

		public function delete($id)
		{
			// $this->_deleteAnggota($id);
			return $this->db->delete($this->_table, ['id_anggota' => $id]);
		}

		public function getAnggotaById($id)
		{
			return $this->db->get_where($this->_table, ['id_anggota' => $id])->row();
		}

		public function getAllAnggota()
		{
			return $this->db->get($this->_table)->result();
		}

		public function getLimitAnggota($start, $limit)
		{

		}
	}
 ?>