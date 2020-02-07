<?php

class Lapangan_model extends CI_model{
    public function getAllLapangan($id = null){
        if($id === null){
            return $this->db->get("lapangan")->result_array();
        }else{
            return $this->db->get_where("lapangan", ['id' => $id])->result_array();
        }
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
        return $this->db->affected_rows();
    }

    public function hapusDataLapangan($id){
        $this->db->delete("lapangan", ["id" => $id]);
        return $this->db->affected_rows();
    }

    public function getDataLapanganById($id){
        return $this->db->get_where("lapangan", ["id" => $id])->row_array();
    }

    public function ubahDataLapangan($data = null, $id = null){
        if($data === null && $id === null){
            $data = [
                "nama" => $this->input->post("nama", true),
                "jenis" => $this->input->post("jenis", true),
                "status" => $this->input->post("status", true)
            ];
            $this->db->where("id", $this->input->post("id"));
            $this->db->update("lapangan", $data);
        }else{
            $this->db->update("lapangan", $data, ['id' => $id]);
            return $this->db->affected_rows();
        }
        
    }
}