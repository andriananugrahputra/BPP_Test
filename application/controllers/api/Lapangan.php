<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Lapangan extends REST_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Lapangan_model');
        $this->methods['index_get']['limit'] = 2;
    }
    public function index_get(){
        $id = $this->get('id');
        if($id === null){
            $lapangan = $this->Lapangan_model->getAllLapangan();
        }else{
            $lapangan = $this->Lapangan_model->getAllLapangan($id);
        }

        if($lapangan){
            $this->response([
                'status' => TRUE,
                'data' => $lapangan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'data not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => FALSE,
                'message' => 'access denied, no id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Lapangan_model->hapusDataLapangan($id) > 0){
                $this->response([
                    'status' => TRUE,
                    'message' => 'success deleted'
                ]);
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            "nama" => $this->input->post("nama"),
            "jenis" => $this->input->post("jenis"),
            "status" => $this->input->post("status")
        ];

        if($this->Lapangan_model->tambahDataLapangan($data) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'success add lapangan'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'failed to add data lapangan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id');
        $data = [
            "nama" => $this->put("nama"),
            "jenis" => $this->put("jenis"),
            "status" => $this->put("status")
        ];

        if($this->Lapangan_model->ubahDataLapangan($data, $id) > 0){
            $this->response([
                'status' => TRUE,
                'message' => 'success updated data lapangan'
            ]);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data lapangan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}