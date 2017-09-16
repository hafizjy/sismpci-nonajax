<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function Getdatpeg(){
		$data= $this->db->get('pegawai');
		return $data;
	}

	public function tambahdatpeg(){
		$data = array("NIP"=>$this->input->post('NIP'),
			"Nama"=>$this->input->post('Nama'),
			"No_SK"=>$this->input->post('No_SK'),
			"Jenis_kelamin"=>$this->input->post('Kelamin'),
			"Golongan"=>$this->input->post('Golongan'),
			"kompetensi"=>$this->input->post('Kompetensi'),
			"TTL"=>$this->input->post('TTL'),
			"TMT_capeg"=>$this->input->post('TMT_Capeg'),
			"Pendidikan"=>$this->input->post('Pendidikan'),
			"Agama"=>$this->input->post('Agama'),
			"kontak"=>$this->input->post('Kontak'),
			"alamat"=>$this->input->post('Alamat'),
			"Status"=>$this->input->post('Status')
			);
		$this->db->insert('pegawai',$data);
	}
}
