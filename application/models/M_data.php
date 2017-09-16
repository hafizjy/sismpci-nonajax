<?php
class M_data extends CI_Model{
	function getdeskripsinilai(){
		return $this->db->query("SELECT * FROM deskripsi_nilai");
	}


	function getkategorinilai(){
		return $this->db->query("SELECT * FROM kategori_nilai");
	}
	function setkategorinilai(){
		
		

		$this->db->insert('kategori_nilai',$data);
	}
	function editkategorinilai(){
		
		$id_kat=$this->input->post('id');
		$katnilai=$this->input->post('katnilai');
		$bobot=$this->input->post('bobot');
		
		$data= array(
			'kategori_nilai'=>$katnilai,
			'bobot'=>$bobot
			);
		$where= array('id_kategorinilai'=>$id_kat);
		$this->db->where($where);
		$this->db->update('kategori_nilai',$data);
	}
	
	function tambahdata($data,$table){
		$this->db->insert($table,$data);
	}

	function hapusdata($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
}
?>