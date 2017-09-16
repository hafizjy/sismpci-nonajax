<?php
class Penilaian extends CI_Controller {


        public function index()
        {
        	$this->load->view('penilaian/penilaian_header');
            $this->load->view('penilaian/nilaisiswa');
        }
        public function deskripsinilai(){
        	$this->load->model('M_data');
        	$this->load->view('penilaian/penilaian_header');
            $this->load->view('penilaian/deskripsinilai');
        }
        public function kategorinilai(){
            $this->load->model('M_data');
            $data['kategori_nilai'] = $this->M_data->getkategorinilai()->result();
        	$this->load->view('penilaian/penilaian_header');
            $this->load->view('penilaian/kategorinilai',$data);

        }
        public function tambah_katnilai(){
            $this->load->model('M_data');
            $this->M_data->setkategorinilai($data);
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
            $this->M_data->delkategorinilai($where,$table);
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