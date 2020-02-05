<?php

class Lapangan_model extends CI_model{
    public function getAllLapangan(){
        return $this->db->get("lapangan")->result_array();
    }

    public function getDataLapanganBulutangkis(){
        return $this->db->get_where("lapangan", ["jenis" => "Bulu Tangkis"])->result_array();
    }

    public function getDataLapanganFutsal(){
        return $this->db->get_where("lapangan", ["jenis" => "Futsal"])->result_array();
    }

    public function getDataLapanganTenis(){
        return $this->db->get_where("lapangan", ["jenis" => "Tenis"])->result_array();
    }

    public function tambahDataLapangan(){
        $data = [
            "nama" => $this->input->post("nama", true),
            "jenis" => $this->input->post("jenis", true),
            "status" => $this->input->post("status", true)
        ];
        $this->db->insert("lapangan", $data);
    }

    public function hapusDataLapangan($id){
        return $this->db->delete("lapangan", ["id" => $id]);
    }

    public function getDataLapanganById($id){
        return $this->db->get_where("lapangan", ["id" => $id])->row_array();
    }

    public function ubahDataLapangan(){
        $data = [
            "nama" => $this->input->post("nama", true),
            "jenis" => $this->input->post("jenis", true),
            "status" => $this->input->post("status", true)
        ];
        $this->db->where("id", $this->input->post("id"));
        $this->db->update("lapangan", $data);
    }
}