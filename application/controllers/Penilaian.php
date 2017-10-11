<?php
class Penilaian extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_data');
        $this->load->view('penilaian/penilaian_header');
        $this->load->view('penilaian/penilaian_footer');   
    }

    public function index()
    {
     $this->load->view('penilaian/nilaisiswa');
 }
 public function nilaisiswa(){
    $this->load->model('M_data');
    $data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
    $data1['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
    $data2['siswa'] = $this->M_data->getNamasiswa()->result();
    $data3['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    $data4['nilai_siswa'] = $this->M_data->getNilai()->result();
    $data5['mapel'] = $this->M_data->getMapel()->result();
    
    $dataAll= $data+$data1+$data2+$data3+$data4+$data5;
    $dataAll=array_merge($data,$data1,$data2,$data3,$data4,$data5);
    $this->load->view('penilaian/nilaisiswa',$dataAll);
}


public function tambah_nilai(){
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=nl2br($this->input->post('deskripsi'));

    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->tambahdata($data,'deskripsi_nilai');
    $this->load->view('penilaian/deskripsinilai');     
    redirect('penilaian/deskripsinilai');

}

public function deskripsinilai(){
 $this->load->model('M_data');
 $data['deskripsi_nilai'] = $this->M_data->getDeskripsinilai()->result();
 $data1['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
 $dataAll= $data1+$data;
 $dataAll=array_merge($data,$data1);    
 $this->load->view('penilaian/deskripsinilai',$dataAll);
}

public function tambah_desknilai(){
    $this->load->model('M_data');
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=nl2br($this->input->post('deskripsi'));

    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->tambahdata($data,'deskripsi_nilai');
    $this->load->view('penilaian/deskripsinilai');     
    redirect('penilaian/deskripsinilai');

}

public function ubah_desknilai(){

    $this->load->model('M_data');
    $id_desk=$this->input->post('id');
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=nl2br($this->input->post('deskripsi'));
    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->editdesknilai($data,$this->uri->segment(3));
    $this->load->view('penilaian/deskripsinilai');     
    redirect('penilaian/deskripsinilai');
}

public function form_edit_deskripsi(){
    $this->load->model('M_data');
    $data['s']=$this->M_data->selectDesknilai($this->uri->segment(3));
    $this->load->view('penilaian/edit/edit_desknilai',$data);
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
    $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
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
    $this->load->view('penilaian/kategorinilai');     
    redirect('penilaian/kategorinilai');
}

public function ubah_katnilai(){

    $this->load->model('M_data');
    $id_kat=$this->input->post('id');
    $katnilai=$this->input->post('katnilai');
    $bobot=$this->input->post('bobot');

    $data= array(
        'kategori_nilai'=>$katnilai,
        'bobot'=>$bobot
    );

    $this->M_data->editkategorinilai($data,$this->uri->segment(3));
    $this->load->view('penilaian/kategorinilai');     
    redirect('penilaian/kategorinilai');
}

public function form_edit_kategori(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKatnilai($this->uri->segment(3));
    $this->load->view('penilaian/edit/edit_katnilai',$data);
}

public function hapus_katnilai($id){
    $this->load->model('M_data');
    $where= array('id_kategorinilai'=>$id);
    $table= 'kategori_nilai';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/kategorinilai');

}

public function jenisNA(){
    $this->load->model('M_data');
    $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    $this->load->view('penilaian/jenisnilaiakhir',$data);
}

public function tambah_jenisnilai(){
    $this->load->model('M_data');
    $nama=$this->input->post('nama');
    $data= array(
        'jenis_na'=>$nama
    );
    $this->M_data->tambahdata($data,'jenis_nilai_akhir');
    $this->load->view('penilaian/jenisnilaiakhir');     
    redirect('penilaian/jenisNA');
}


public function ubah_JenisNilai(){

    $this->load->model('M_data');
    $id_kat=$this->input->post('id');
    $jenisNA=$this->input->post('jenisnilai');

    $data= array(
        'jenis_na'=>$jenisNA,
    );

    $this->M_data->editjenisnilai($data,$this->uri->segment(3));
    $this->load->view('penilaian/jenisnilaiakhir');     
    redirect('penilaian/jenisNA');
}

public function form_edit_jenisNilai(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectJenisnilai($this->uri->segment(3));
    $this->load->view('penilaian/edit/edit_jenisNilai',$data);
}

public function hapus_JenisNilai($id){
    $this->load->model('M_data');
    $where= array('id_jenis_na'=>$id);
    $table= 'jenis_nilai_akhir';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/JenisNA');

}


public function rapor(){
    $this->load->view('penilaian/rapor');
}
}
