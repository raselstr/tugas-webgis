<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $data = array(
            'judul' => 'Home',
            'page' => 'v_home',
        );
		$this->load->view('v_template', $data, false);
	}

    public function viewmap()
	{
        $data = array(
            'judul' => 'View Map',
            'page' => 'v_map',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewbasemap()
	{
        $data = array(
            'judul' => 'View Base Map',
            'page' => 'v_basemap',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewmarker()
	{
        $data = array(
            'judul' => 'View Marker',
            'page' => 'v_maker',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewcircle()
	{
        $data = array(
            'judul' => 'View Circle',
            'page' => 'v_circle',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewpolyline()
	{
        $data = array(
            'judul' => 'View Polyline',
            'page' => 'v_polyline',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewpolygon()
	{
        $data = array(
            'judul' => 'View Polygon',
            'page' => 'v_polygon',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewinfo()
	{
        $data = array(
            'judul' => 'Informasi',
            'page' => 'v_info',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewgeojson()
	{
        $data = array(
            'judul' => 'Geo Json',
            'page' => 'v_geojson',
        );
		$this->load->view('v_template', $data, false);
	}

	public function viewgetcoordinat()
	{
        $data = array(
            'judul' => 'Coordinat',
            'page' => 'v_getcoordinat',
        );
		$this->load->view('v_template', $data, false);
	}
}
