<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_toko extends CI_Controller {

	public function index()
	{
		
if (isset($_POST['Pemesanan'])){
			
$data = array(
        'Nama_barang'    => $_POST['Barang'],
        'Nama_penerima'  => $_POST['Penerima'],
        'Jumlah_barang'  => $_POST['Jumlah'],
        'Provinsi'       => $_POST['Provinsi'],
        'Kota'           => $_POST['Kota/kbpt'],
        'Kecamatan'      => $_POST['Kecamatan'],
        'Kelurahan'      => $_POST['Kelurahan'],
        'Alamat_lengkap' => $_POST['Lengkap'],
        'Kode_pos'       => $_POST['Kode']
        
        );
        $this->db->insert("pemesanan",$data);
        redirect(site_url('user/Products/Dashboard_produk'));

	} else {

		$this->load->view('Form_pemesanan');
        }

        	}



        }