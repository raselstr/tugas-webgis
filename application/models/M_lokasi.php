<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {

	// Simpan data
	public function input($data)
	{
		$this->db->insert('tbl_lokasi', $data);
        
	}

	// Ambil data dari database
	public function allData()
	{
		$this->db->select('*');
		$this->db->from('tbl_lokasi');
		return $this->db->get()->result();

		
		
	}

	// Mengambil data berdasarkan Id Lokasi
	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_lokasi');
		$this->db->where('id', $id);
		
		return $this->db->get()->row();
	}

	public function edit($edit)
	{
		$this->db->where('id', $edit['id']);
		$this->db->update('tbl_lokasi', $edit);
		
	}
}
