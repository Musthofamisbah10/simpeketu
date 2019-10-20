<?php 

	class Auth extends Ci_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('auth_m');
		}

		public function index()
		{
			$this->load->view('auth');
		}

		public function proses()
		{
			$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			sha1($password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));

			// cek ke database
			$cek_pengurus=$this->auth_m->authPengurus($username,$password);

			if($cek_pengurus->num_rows() > 0){ //jika login sebagai pengurus
				$data=$cek_pengurus->row_array();
				$this->session->set_userdata('masuk',TRUE);
			      
			   if($data['level']=='1'){ //Akses pengurus_admin
			      $this->session->set_userdata('akses','1');
			      $this->session->set_userdata('ses_id',$data['id_pengurus']);
			      $this->session->set_userdata('ses_nama',$data['nama_pengurus']);
			      
			      redirect('dashboard');

			   }else{ //akses pengurus
			    	$this->session->set_userdata('akses','2');
			      $this->session->set_userdata('ses_id',$data['id_pengurus']);
			      $this->session->set_userdata('ses_nama',$data['nama_pengurus']);
			      
			      redirect('dashboard');
			   }

			}else{ //jika login sebagai anggota
			   $cek_anggota=$this->auth_m->authAnggota($username,$password);
			   
			   if($cek_anggota->num_rows() > 0){
			      $data=$cek_anggota->row_array();
			      $this->session->set_userdata('masuk',TRUE);
			      $this->session->set_userdata('akses','3');
			      $this->session->set_userdata('ses_id',$data['id_anggota']);
			      $this->session->set_userdata('ses_nama',$data['nama_anggota']);
			      
			      redirect('dashboard');
			   }else{  // jika username dan password tidak ditemukan atau salah
			      echo $this->session->set_flashdata('pesan','Username Atau Password Salah');
			      redirect('auth');
			   }
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('auth');
		}
	}
 ?>