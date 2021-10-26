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
			
			}	
		}else{





			$kondisi = array('no_tlp' => $_POST['txt_no_tlp'], 'password' => $_POST['txt_pass'] );
			$query = $this->db->get_where('login', $kondisi)->result();
	
			$kom = $query[0];
			$kom1= $kom->role;
			$kom2= $kom->username;
			$kom3= $kom->no_tlp;
			$kom4= $kom->email;
			$_SESSION['role']=$kom1;
			$_SESSION['username']=$kom2;
			$_SESSION['no_tlp']=$kom3;
			$_SESSION['email']=$kom4;
 
			if($kom1 == 1){
				$this->load->view("admin/dashboard_admin");
			}else{



				redirect('user/dashboard');

			}
		}
	}
	

}
