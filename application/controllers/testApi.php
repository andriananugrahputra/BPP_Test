<?php
    // defined('BASEPATH') OR exit('No direct script access allowed');

    // require APPPATH . '/libraries/REST_Controller.php';
    // use Restserver\Libraries\REST_Controller;

    class Api extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("Lapangan_model");
            $this->load->library("form_validation");
        }

        public function lapangan(){
            $data = $this->Lapangan_model->getAllLapangan();
            echo json_encode($data);
        }

        public function bulutangkis(){
            $data = $this->Lapangan_model->getDataLapanganBulutangkis();
            echo json_encode($data);
        }

        public function futsal(){
            $data = $this->Lapangan_model->getDataLapanganFutsal();
            echo json_encode($data);
        }
        public function tenis(){
            $data = $this->Lapangan_model->getDataLapanganTenis();
            echo json_encode($data);
        }

        public function tambah(){
            $data = [
                "nama" => $this->input->post("nama"),
                "jenis" => $this->input->post("jenis"),
                "status" => $this->input->post("status")
            ];
            $this->db->insert("lapangan", $data);
            echo json_encode($data);
        }

        public function hapus(){
            $id = intval($_GET['id']);
            $this->db->delete("lapangan", ["id" => $id]);
            // $id = ["id" => $this->input->post("id")];
            // $this->db->where('id', $id);
            // $delete = $this->db->delete('lapangan');

            // if ($delete) {
            //     $this->response(array('status' => 'success'), 201);
            // } else {
            //     $this->response(array('status' => 'fail', 502));
            // }
        }

        public function ubah(){
            $id = intval($_GET['id']);
            $data = [
                "nama" => $this->input->post("nama"),
                "jenis" => $this->input->post("jenis"),
                "status" => $this->input->post("status")
            ];
            $this->db->where("id", $id);
            $this->db->update("lapangan", $data);
            echo json_encode($data);
        }
    }