<?php
    class Lapangan extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("Lapangan_model");
            $this->load->library("form_validation");
            
        }
        public function bulutangkis(){
            $data["bulutangkis"] = $this->Lapangan_model->getDataLapanganBulutangkis();
            $this->load->view("templates/header");
            $this->load->view("lapangan/bulutangkis", $data);
            $this->load->view("templates/footer");
        }
        public function futsal(){
            $data["futsal"] = $this->Lapangan_model->getDataLapanganFutsal();
            $this->load->view("templates/header");
            $this->load->view("lapangan/futsal", $data);
            $this->load->view("templates/footer");
        }
        public function tenis(){
            $data["tenis"] = $this->Lapangan_model->getDataLapanganTenis();
            $this->load->view("templates/header");
            $this->load->view("lapangan/tenis", $data);
            $this->load->view("templates/footer");
        }

        public function tambah(){
            $this->form_validation->set_rules("nama", "Nama", "required");
            $this->form_validation->set_rules("jenis", "Jenis", "required");
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("lapangan/tambah");
                $this->load->view("templates/footer");   
            }else{
                $this->Lapangan_model->tambahDatalapangan();
                $this->session->set_flashdata("flash", "Ditambahkan");
                redirect("lapangan/bulutangkis");
            }
        }

        public function hapus($id){
            $this->Lapangan_model->hapusDataLapangan($id);
            $this->session->set_flashdata("flash", "Dihapus");
            redirect("lapangan/bulutangkis");
        }

        public function ubah($id){
            $data["lapangan"] = $this->Lapangan_model->getDataLapanganById($id);
            $this->form_validation->set_rules("nama", "Nama", "required");
            $this->form_validation->set_rules("jenis", "Jenis", "required");
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("lapangan/ubah", $data);
                $this->load->view("templates/footer");   
            }else{
                $this->Lapangan_model->ubahDatalapangan();
                $this->session->set_flashdata("flash", "Diubah");
                redirect("lapangan/bulutangkis");
            }
        }
    }