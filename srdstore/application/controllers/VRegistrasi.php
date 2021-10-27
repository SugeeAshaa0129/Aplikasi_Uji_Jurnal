<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VRegistrasi extends CI_Controller {

	public function index()
	{
		
if (isset($_POST['btn_login'])){
			
$data = array(
        'username' => $_POST['txt_user'],
        'email'    => $_POST['txt_email'],
        'password' => $_POST['txt_pass'],
        'no_tlp'   => $_POST['txt_no_tlp'],
        'role'     => $_POST['role']
        
		);
		$this->db->insert("login",$data);


			redirect(site_url('Login'));

			} else {

				$this->load->view('VRegistrasi.php');
		}

			
			}

		}