<?php 

class Invoice extends CI_Controller{

	public function index() 
	{
		$data['invoice'] = $this->M_invoice->semua_data();
		$this->load->view('admin/product/invoice',$data);
	}
}