<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    function admin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=md5('$password') LIMIT 1");
        return $query;
    }

    //cek username dan password pengajar
    function auth_dosen($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=md5('$password') LIMIT 1");
        return $query;
    }

}