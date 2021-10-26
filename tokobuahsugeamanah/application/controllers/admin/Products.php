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

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

     public function tentang()
    {
        $this->load->view("admin/product/tentang");
    }

    public function new()
    {   
        $this->load->view("admin/product/new_form");
    }


    public function tambah_aksi()
    {
        $name        = $this->input->post('name');
        $price       = $this->input->post('price');
        $image       = $_FILES['image']['name'];
        if($image =''){}else{
        $config ['upload_path']   = './upload/product';
        $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('image')){
            echo "Gambar gagal di upload!";
        }else{
            $image = $this->upload->data('file_name');
           }    
        }

        $description = $this->input->post('description');

        $data = array (
            'name'        => $name,
            'price'       => $price,
            'image'       => $image,
            'description' => $description
        );

        $this->Product_model->tambah_barang($data, 'products');
        redirect('admin/products');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}