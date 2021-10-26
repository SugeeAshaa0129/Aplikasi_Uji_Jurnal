<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	if(!empty($_SESSION['role'])){
		session_destroy();
	}
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$no_tlp = $_POST['txt_no_tlp'];
				$password = $_POST['txt_pass'];
				$notif = $this->MLogin->GoLogin($no_tlp,$password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('admin/dashboard'));
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');

					echo "Password Atau Nomoe anda salah!";
				}
			}

		$this->load->view('VLogin');
	}

}