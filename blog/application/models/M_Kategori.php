<?php
class M_Kategori extends CI_Model{
    public function getKategori(){
        return $this->db->get('kategori');
    }
}