<?php 

	class Auth_m extends CI_Model
	{

		public function authPengurus($username, $password)
		{
			return $this->db->get_where('pengurus', $username, $password);
		}

		public function authAnggota($username, $password)
		{
			return $this->db->get_where('anggota', $username, $password);
		}
	}
 ?>
 