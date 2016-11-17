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

    public function login($username,$password)
    {
        $this->db->select('id,username,password');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        //var_dump(array('username','password'));
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            //return $query->result();

            redirect(base_url()."admin_controller", "refresh" );
        }
        else
        {
            redirect(base_url()."home_controller", "refresh" );
        }

    }

    public function register($data)
    {
        $this->db->insert('users',$data);

    }




}

?>