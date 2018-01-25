<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyakit extends CI_Controller {
	public function __construct() {
		parent::__construct();
		// $this->load->model('M_pegawai');
		// $this->load->model('M_posisi');
		// $this->load->model('M_kota');
	}

	public function index() {
		$data['nama_halaman'] = 'penyakit';
		$data['page'] = 'frontend/penyakit';
 		$this->load->view('frontend/layout/template', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/frontend/Home.php */