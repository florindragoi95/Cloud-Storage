<?php

class Student_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("Student_model");
    }

    public function index(){
        $this->select();
    }

    public function select()
    {
        $data['records'] = $this->Student_model->get();
        //var_dump($data['records']); die();
        $this->load->view('Student_view',$data);
    }

    public function insert()
    {
        $data = array(
            "student_name"=>$this->input->post('name'),
        );
        //var_dump($data); die();
        $this->Student_model->insert($data);
        redirect(base_url()."student_controller", "refresh" );
    }

    public function delete() {
        $id = $this->input->post('id');
        $this->Student_model->delete($id);
        redirect(base_url()."student_controller", "refresh" );
    }

}




?>