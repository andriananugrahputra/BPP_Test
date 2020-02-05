<?php
    class Booking extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("Lapangan_model");
            $this->load->library("form_validation");
            
        }
        public function bulutangkis(){
            $data["bulutangkis"] = $this->Lapangan_model->getDataLapanganBulutangkis();
            $this->load->view("templates/header");
            $this->load->view("booking/bulutangkis", $data);
            $this->load->view("templates/footer");
        }
        public function futsal(){
            $data["futsal"] = $this->Lapangan_model->getDataLapanganFutsal();
            $this->load->view("templates/header");
            $this->load->view("booking/futsal", $data);
            $this->load->view("templates/footer");
        }
        public function tenis(){
            $data["tenis"] = $this->Lapangan_model->getDataLapanganTenis();
            $this->load->view("templates/header");
            $this->load->view("booking/tenis", $data);
            $this->load->view("templates/footer");
        }

        public function tambah($id){
            $this->form_validation->set_rules("nama", "Nama", "required");
            $this->form_validation->set_rules("jenis", "Jenis", "required");
            $this->form_validation->set_rules("lapangan", "Lapangan", "required");
            $this->form_validation->set_rules("tanggal", "Tanggal", "required");
            $this->form_validation->set_rules("jamMulai", "JamMulai", "required");
            $this->form_validation->set_rules("jamAkhir", "JamAkhir", "required");
            $data["booking"] = $this->Lapangan_model->getDataLapanganById($id);
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("booking/tambah", $data);
                $this->load->view("templates/footer");   
            }else{
                $this->Booking_model->tambahDataBooking();
                $this->session->set_flashdata("flash", "Ditambahkan");
                redirect("booking/bulutangkis");
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