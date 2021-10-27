<?php 

class Invoice extends CI_Controller{

	public function index() 
    {
        $data['invoice'] = $this->M_invoice->semua_data();
        $this->load->view('admin/product/invoice',$data);
    }

    public function detail($id_invoice) 
    {
        $data['invoice'] = $this->M_invoice->semua_data_invoice($id_invoice);
        $data['pesanan'] = $this->M_invoice->semua_data_pesanan($id_invoice);
        $this->load->view('admin/product/detail_pesanan',$data);
    }

    public function hapus($id) 
    {
       
        $where = array('id' => $id);
        $this->M_invoice->hapus_invc($where, 'invoice');
        redirect('admin/invoice/index');
    }    
}