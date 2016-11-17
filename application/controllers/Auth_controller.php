<?php


class Auth_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Auth_model");
    }

    public function index()
    {
        $this->load->view("Auth_view");
        $this->load->helper(array('form'));
    }

    public function registerPage()
    {
        $this->load->view("Register_view");
        $this->load->model("Auth_model");
    }

    public function register()
    {
        $data = array (
            "firstname" => $this->input->post('f_name'),
            "lastname" => $this->input->post('l_name'),
            "username" => $this->input->post('u_name'),
            "password" => $this->input->post('pass'),
        );

        //var_dump($data); die();
        $this->Auth_model->register($data);
    }


    public function login()
    {
        $username = $this->input->post('name');
        $password = $this->input->post('password');
        //var_dump(array($username,$password)); die();
        $this->Auth_model->login($username,$password);
    }


}

?>