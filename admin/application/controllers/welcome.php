<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		// $this->load->model('M_pegawai');
		// $this->load->model('M_posisi');
		// $this->load->model('M_kota');
	}

	public function index() {
		echo "<a href='".base_url('backend/Auth')."'>Admin</a>";;
	}
}

/* End of file Penyakit.php */
/* Location: ./application/controllers/Penyakit.php */