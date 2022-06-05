<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelRestoran extends CI_Model {

    public $id_kategori;
    public $nama_kategori;

    public function get_all()
    {
        $query = $this->db->get('tbl_restoran');
        return $query;
    }

    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('tbl_restoran');
        $this->db->join('kategori', 'tbl_restoran.kategori = kategori.id_kategori');
        $query = $this->db->get();
        return $query;
    }

    public function get_all3()
    {
        $query = $this->db->get('kategori');
        return $query;
    }


    public function getById($kode)
    {
        return $this->db->get_where('tbl_restoran', ["kode" => $kode])->row_array();
    }

    public function insert_entry($data)
    {
        $this->db->insert('tbl_restoran', $data); //mahasiswa = nama tabel  // Syaratnya fieldnya harus sama semua
    }

    public function update($data,$kode)
    {
        return $this->db->update('tbl_restoran', $data, array('kode' => $kode));
    }

    public function delete($kode)
    {
        return $this->db->delete('tbl_restoran', array("kode" => $kode));
    }

}