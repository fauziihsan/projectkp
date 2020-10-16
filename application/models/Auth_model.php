<?php

class Auth_model extends CI_Model
{
    public function cek_pengguna($where)
    {
        return $this->db->get_where("pengguna", $where);
    }

    public function cek_akun($where)
    {
        return $this->db->get_where("pengguna", $where);
    }
}
