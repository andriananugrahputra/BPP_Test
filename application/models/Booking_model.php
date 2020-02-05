<?php

class Booking_model extends CI_model{
    public function getAllBooking(){
        return $this->db->get("booking")->result_array();
    }

    public function getDataBookingBulutangkis(){
        return $this->db->get_where("booking", ["jenis" => "Bulu Tangkis"])->result_array();
    }

    public function getDataBookingFutsal(){
        return $this->db->get_where("booking", ["jenis" => "Futsal"])->result_array();
    }

    public function getDataBookingTenis(){
        return $this->db->get_where("booking", ["jenis" => "Tenis"])->result_array();
    }

    public function tambahDataBooking(){
        $data = [
            "nama" => $this->input->post("nama", true),
            "jenis" => $this->input->post("jenis", true),
            "lapangan" => $this->input->post("lapangan", true),
            "tanggal" => $this->input->post("tanggal", true),
            "jamMulai" => $this->input->post("jamMulai", true),
            "jamAkhir" => $this->input->post("jamAkhir", true)
        ];
        $this->db->insert("booking", $data);
    }

    public function hapusDataBooking($id){
        return $this->db->delete("booking", ["id" => $id]);
    }

    public function getDataBookingById($id){
        return $this->db->get_where("booking", ["id" => $id])->row_array();
    }

    public function ubahDataBooking(){
        $data = [
            "nama" => $this->input->post("nama", true),
            "jenis" => $this->input->post("jenis", true),
            "status" => $this->input->post("status", true)
        ];
        $this->db->where("id", $this->input->post("id"));
        $this->db->update("booking", $data);
    }
}