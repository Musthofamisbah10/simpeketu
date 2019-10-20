<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_m extends CI_Model {

	private $_table = 'jabatan';
		public $id_jabatan;
		public $nama_jabatan;

	public function rules()
	{
		return [
			[
				'field'	=>	'nama_jabatan',
				'label'	=>	'jabatan',
				'rules'	=>	'required'
			]
		];
	}

	public function save()
	{
		$post = $this->input->post();
		$this->nama_jabatan = $post['nama_jabatan'];

		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->nama_jabatan = $post['nama_jabatan'];

		$this->db->update($this->_table, $this, array('id_jabatan' => $post['id_jabatan']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, ['id_jabatan' => $id]);
	}

	public function getJabatanById($id)
	{
		return $this->db->get_where($this->_table, ['id_jabatan' => $id])->row();
	}

	public function getAllJabatan()
	{
		return $this->db->get($this->_table)->result();
	}

}

/* End of file Jabatan_m.php */
/* Location: ./application/modules/jabatan/models/Jabatan_m.php */