<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}

		function GoLogin($no_tlp,$password){
			$this->db->select('*');
			$this->db->from('login');
			$this->db->where('no_tlp', $no_tlp);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if($query -> num_rows() == 1){
				$row = $query->row(); 
    			return $row->nis;
			}else{
				return false;
			}
		}

	}
?>