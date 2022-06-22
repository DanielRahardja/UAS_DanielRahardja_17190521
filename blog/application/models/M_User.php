<?php
class M_User extends CI_Model{
    public function cek_login($username,$password){
        $data= array(
            'username' =>$username,
            'password' =>sha1($password)
        );
        return $this->db->get_where('user', $data);
    }
}