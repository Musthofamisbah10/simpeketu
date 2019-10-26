<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

	private $_table = 'admin';
	public $id_admin;
	public $nama_admin;
	public $username;
	public $password;

	public function _rules()
	{
		return[
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
		];
	}

	public function cekLogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->_table);
	}

	public function getLoginData($user, $pass)
	{
		$u = $user;
		$p = sha1($pass);

		$query_ceklogin = $this->db->get_where('admin', ['username' => $u, 'password' => $p]);

		if (count($query_ceklogin->result()) > 0 ){
			foreach( $query_ceklogin->result() as $cek ) {
				foreach( $query_ceklogin->result() as $row){
					$sess_data ['logged_in'] = TRUE;
					$sess_data ['username'] = $row->username;
					$sess_data ['password'] = $row->password;

					// pemanggilan session data
					
					$this->session->set_userdata($sess_data);
				}
				redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible
					fade show" role="alert">
					  Username dan atau Password <strong>Salah</strong>.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth');
		}
	}

}

/* End of file Auth_Model.php */
/* Location: ./application/modules/auth/models/Auth_Model.php */