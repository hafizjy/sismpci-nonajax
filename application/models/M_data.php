<?php
class M_data extends CI_Model{
	function getNilai(){
		return $this->db->query("SELECT * FROM nilai_siswa n JOIN kategori_nilai k ON n.kategori_nilai_id=k.id_kategorinilai JOIN jenis_nilai_akhir j ON n.jenis_na_id=j.id_jenis_na JOIN mapel m ON n.mapel_id=m.id_mapel JOIN siswa s ON n.NISN=s.nisn");
	}
	function getDeskripsinilai(){
		return $this->db->query("SELECT * FROM deskripsi_nilai");
	}
	function getNamasiswa(){
		return $this->db->query("SELECT * FROM siswa s JOIN kelas_berjalan_has_siswa_kelas k ON s.nisn=k.id_siswakls");
	}

	function getKategorinilai(){
		return $this->db->query("SELECT * FROM kategori_nilai");
	}

	function getJenisnilai(){
		return $this->db->query("SELECT * FROM jenis_nilai_akhir");
	}

	function getMapel(){
		return $this->db->query("SELECT * FROM mapel k JOIN nilai_siswa n ON k.id_mapel=n.mapel_id ");
	}

	function getKelas(){
		return $this->db->query("SELECT * FROM kelas_reguler_berjalan k JOIN kelas_reguler r ON k.id_kelas_reguler=r.id_kelas_reguler");
	}

	function setkategorinilai(){
		$this->db->insert('kategori_nilai',$data);
	}
	function editkategorinilai($data,$id){
		
		
		$this->db->where('id_kategorinilai',$id);
		$this->db->update('kategori_nilai',$data);
	}

	function editdesknilai($data,$id){
		
		
		$this->db->where('id_deskripsi',$id);
		$this->db->update('deskripsi_nilai',$data);
	}
	
	function editjenisnilai($data,$id){
		
		
		$this->db->where('id_jenis_na',$id);
		$this->db->update('jenis_nilai_akhir',$data);
	}
	
	public function selectKatnilai($id)
	{
		$this->db->where('id_kategorinilai', $id);
		return $this->db->get('kategori_nilai')->row(); 
	}
	public function selectDesknilai($id)
	{
		$this->db->where('id_deskripsi', $id);
		return $this->db->get('deskripsi_nilai')->row(); 
	}

	public function selectJenisnilai($id)
	{
		$this->db->where('id_jenis_na', $id);
		return $this->db->get('jenis_nilai_akhir')->row(); 
	}

	function tambahdata($data,$table){
		$this->db->insert($table,$data);
	}

	function tambahdatabatch($data,$table){
		$this->db->insert_batch($table,$data);
	}

	function hapusdata($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
}
?>