<?php
class M_invoice extends CI_Model{

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama         = $this->input->post('nama');
		$alamat       = $this->input->post('alamat');
		$no_tlp       = $this->input->post('no_tlp');
		$jasa_kirim   = $this->input->post('jasa_kirim');
		$kode_pos     = $this->input->post('kode_pos');

		$invoice = array (

			'nama'         => $nama,
			'alamat'       => $alamat,
			'no_tlp'       => $no_tlp,
			'jasa_kirim'   => $jasa_kirim,
			'kode_pos'     => $kode_pos,
			'tgl_pesan'    => date('Y-m-d H:i:s'),
			'batas_bayar'  => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
		);

		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $items){
			$data = array(
				'id_invoice'     => $id_invoice,
				'id_brg'     => $items['id'],
				'nama_brg'     => $items['name'],
				'jumlah'     => $items['qty'],
				'harga'     => $items['price'],
			);
			$this->db->insert('pesanan', $data);
		}

		return TRUE;
	}

	public function semua_data(){

		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function semua_data_invoice($id_invoice){

		$result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('pesanan');

		if($result->num_rows() > 0){

			return $result->row();
		} else {

			return false;
		}
	}

	public function semua_data_pesanan($id_invoice){

		$result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');

		if($result->num_rows() > 0){

			return $result->result();
		} else {

			return false;
		}
	}

	public function hapus_invc($where,$table){

		$this->db->where($where);
		$this->db->delete($table);

	}
}