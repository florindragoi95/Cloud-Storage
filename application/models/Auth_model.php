<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {

    }

    public function getAll()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function login($username, $password)
    {
        $this->db->select('id,username,password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if($query->num_rows() == 1 ) {
            return 1;
        }

        return 0;
    }

    public function register($data)
    {
        $this->db->select("username");
        $this->db->from('users');
        $this->db->where("username",$data['username']);
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            echo "This user exist";
        }
        else
        {
            $this->db->insert('users', $data);
        }



    }


}