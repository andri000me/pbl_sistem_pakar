<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	public function index() {
		$session['userdata'] = $this->session->userdata('userdata');


		if ($session['userdata'] == '') {
			$this->load->view('login');
			// echo "string";
		} elseif($session['userdata']->id_level == 1){
			redirect('backend/admin/Home');
		}elseif($session['userdata']->id_level != 1){
			redirect('backend/pakar/Home_pakar');
		}
	}


	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);
			$level = $this->M_auth->level($username);
			foreach ($level as $level) {
				if ($data == false) {
					$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
					redirect('backend/Auth');
				} 
				elseif ($level == 1) {
					$session = [ 
						'userdata' => $data,
						'status' => "Loged in"
					];
					$this->session->set_userdata($session);
					redirect('backend/admin/Home');
				}elseif ($level == 2) {
					$session = [ 
						'userdata' => $data,
						'status' => "Loged in"
					];
					$this->session->set_userdata($session);
					redirect('backend/pakar/Home_pakar');
				}else{
					echo "string";
				}
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('backend/Auth');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		// redirect('backend/Auth');
		$this->load->view('login');

	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */