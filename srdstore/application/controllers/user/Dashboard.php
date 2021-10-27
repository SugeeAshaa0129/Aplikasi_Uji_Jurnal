<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index(){


		if (!empty($_SESSION['role'])) {
			if($_SESSION['role']== 1){
				$this->load->view("admin/dashboard_admin");
			}else{
			
				$this->load->view("user/dashboard_user");
			}	
		}
	}
}
