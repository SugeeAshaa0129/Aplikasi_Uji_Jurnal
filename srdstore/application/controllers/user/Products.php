<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

     public function tentang()
    {
        $this->load->view("user/product/tentang");
    }

     public function Dashboard_produk()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("user/product/Dashboard_produk",$data);
    }
    
    public function Deskripsi(){

        $this->load->view("user/product/Deskripsi");
    }

    public function Pesanan_prdk($id_invoice){

        $data['invoice'] = $this->M_invoice->semua_data_invoice($id_invoice);
        $data['pesanan'] = $this->M_invoice->semua_data_pesanan($id_invoice);
        $this->load->view('user/product/bayar_pesanan', $data);
    }

    public function pesanan(){

        $data['invoice'] = $this->M_invoice->semua_data();
        $this->load->view('user/product/invoice', $data);
    }

    public function detail($id_invoice) 
    {
        $data['invoice'] = $this->M_invoice->semua_data_invoice($id_invoice);
        $data['pesanan'] = $this->M_invoice->semua_data_pesanan($id_invoice);
        $this->load->view('user/product/detail_pesanan',$data);
    }
    
     public function keranjang($id){

        $produk = $this->Product_model->cari($id);

        $data = array(
        'id'      => $produk->product_id,
        'qty'     => 1,
        'price'   => $produk->price,
        'name'    => $produk->name
        
);

$this->cart->insert($data);
redirect('user/Products/Dashboard_produk');
        
    }

    public function Detail_krj()
    {
        $this->load->view('user/product/keranjang');
    }

     public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect ('user/Products/Detail_krj');
    }

    public function pembayaran()
    {
        $this->load->view('user/product/pembayaran');
    }

    public function proses_pesanan()
    {
        $proses = $this->M_invoice->index();
        if($proses){
            $this->cart->destroy();
            $this->load->view('user/product/pesanan');
        } else {
            echo "Pesanan Anda Gagal Di Proses :(";
        }  
    }

    public function deskripsi_produk ($product_id){

        $data['product'] = $this->Product_model->deskripsi_prdk($product_id);

        $this->load->view('user/product/Deskripsi', $data);
    }     
    
}
    
