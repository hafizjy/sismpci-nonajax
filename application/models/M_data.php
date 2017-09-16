<?php
class M_data extends CI_Model{
	function deskripsinilai(){
		return $this->db->query("SELECT * FROM deskripsi_nilai")->result();
	}

	function getkategorinilai(){
		return $this->db->query("SELECT * FROM kategori_nilai");
	}
	function setkategorinilai(){
		
		$katnilai=$this->input->post('katnilai');
		$bobot=$this->input->post('bobot');
		$data= array(
			'kategori_nilai'=>$katnilai,
			'bobot'=>$bobot
			);

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
	
	function delkategorinilai($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
}
?>