<?php

class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view("Admin_view");
    }



}