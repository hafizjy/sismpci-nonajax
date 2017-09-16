<?php
class Penilaian extends CI_Controller {


    public function index()
    {
       $this->load->view('penilaian/penilaian_header');
       $this->load->view('penilaian/nilaisiswa');
   }
   public function deskripsinilai(){
       $this->load->model('M_data');
       $data['deskripsi_nilai'] = $this->M_data->getdeskripsinilai()->result();
       $this->load->view('penilaian/penilaian_header');
       $this->load->view('penilaian/deskripsinilai',$data);
   }
   public function tambah_desknilai(){
    $this->load->model('M_data');
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=$this->input->post('deskripsi');
    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->tambahdata($data,'deskripsi_nilai');
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/deskripsinilai');     
    redirect('penilaian/deskripsinilai');
}
   public function hapus_desknilai($id){
    $this->load->model('M_data');
    $where= array('id_deskripsi'=>$id);
    $table= 'deskripsi_nilai';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/deskripsinilai');
}
public function kategorinilai(){
    $this->load->model('M_data');
    $data['kategori_nilai'] = $this->M_data->getkategorinilai()->result();
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/kategorinilai',$data);

}
public function tambah_katnilai(){
    $this->load->model('M_data');
    $katnilai=$this->input->post('katnilai');
    $bobot=$this->input->post('bobot');
    $data= array(
        'kategori_nilai'=>$katnilai,
        'bobot'=>$bobot
    );
    $this->M_data->tambahdata($data,'kategori_nilai');
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/kategorinilai');     
    redirect('penilaian/kategorinilai');
}
public function ubah_katnilai(){

    $this->load->model('M_data');

    $this->M_data->editkategorinilai($data);
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/kategorinilai');     
    redirect('penilaian/kategorinilai');
}
public function hapus_katnilai($id){
    $this->load->model('M_data');
    $where= array('id_kategorinilai'=>$id);
    $table= 'kategori_nilai';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/kategorinilai');
}

public function jenisNA(){
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/jenisnilaiakhir');
}
public function rapor(){
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/rapor');
}
}