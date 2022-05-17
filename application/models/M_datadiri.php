<?php
defined('BASEPATH') OR exit('No direct access allowed');

class M_datadiri extends CI_Model{
	public function getdatadiri(){
		return $this->db->get('tbl_datadiri',1)->row();
	}
	public function getdataorganisasi(){
		return $this->db->get('tbl_dataorganisasi');
	}
	public function getdatakeahlian(){
		return $this->db->get('tbl_datakeahlian');
	}
}
?>