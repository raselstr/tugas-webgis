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
		db->
	}
}
