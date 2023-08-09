<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lokasi');
		
	}
	
	// Pemetaan Lokasi
	public function index()
	{
		$data = array(
            'judul' => 'Pemetaan Coordinat',
            'page' => 'lokasi/v_pemetaan_lokasi',
			'lokasi' => $this->m_lokasi->allData(),
        );
		$this->load->view('v_template', $data, false);
	}

    public function input()
	{
		$this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));
		
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));

		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));

		if ($this->form_validation->run()==FALSE) {

			$data = array(
				'judul' => 'Input Lokasi',
				'page' => 'lokasi/v_input_lokasi',
			);
			$this->load->view('v_template', $data, false);
		} else {
			# simpang ke database
			$data = array(
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
			);
			$this->m_lokasi->input($data);
			// Data Berhasil disimpang
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
			
			redirect('lokasi/input');
		}        
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));
		
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));

		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
			'required' =>'%s  Wajib Diisi !'
		));

		if ($this->form_validation->run()==FALSE) {

			$data = array(
				'judul' => 'Edit Lokasi',
				'page' => 'lokasi/v_edit_lokasi',
				'lokasi' => $this->m_lokasi->detail($id),
			);

			$this->load->view('v_template', $data, false);
		} else {
			# simpang ke database
			$data = array(
				'id' => $id,
				'nama_lokasi' => $this->input->post('nama_lokasi'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
			);
			$this->m_lokasi->edit($data);
			// Data Berhasil disimpang
			$this->session->set_flashdata('pesan', 'Data Lokasi Berhasil DiEdit !!');
			
			redirect('lokasi/index');
		}        


		
	}
}
