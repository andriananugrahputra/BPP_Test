<?php
    class Home extends CI_Controller{
        public function index(){
            $data["judul_page"] = "Halaman Utama";
            $this->load->view("templates/header", $data);
            $this->load->view("home/index");
            $this->load->view("templates/footer");
        }
    }