<?php

class Home_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view("Home_view");
    }



}

?>