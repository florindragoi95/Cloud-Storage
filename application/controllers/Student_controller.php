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
        $this->form_validation->set_rules('name','Name','required');
        //$this->form_validation->set_rules('age','Age','required'); //in cazul in care mai exista un input se mai adauga oricate ar fi ele
        $this->form_validation->set_message('required','The %s is required.');

        if ($this->form_validation->run()==false) //daca nu se respecta regula de required
        {
            $this->select();
        }
        else
            {
                $data = array(
                    "student_name"=>$this->input->post('name'),
                );
                //var_dump($data); die();
                $this->Student_model->insert($data);
                redirect(base_url()."student_controller", "refresh" );
            }
    }

    public function delete() {
        $id = $this->input->post('id');
        $this->Student_model->delete($id);
        redirect(base_url()."student_controller", "refresh" );
    }

    public function update_view()
    {

        $id = $this->input->post('id_upd');
        $data['id'] = $id;
        $this->load->view('Update_view',$data);
    }

    public function update()
    {
        $this->form_validation->set_rules('update_name','update name','required');
        $this->form_validation->set_message('required', 'The %s field is required.');

        if ($this->form_validation->run()==false)
        {
            $this->update_view();
        }
        else
        {
            $id = $this->input->post('id');

            $data = array(
                'student_name' => $this->input->post('update_name'),
            );
            $this->Student_model->update_data($id,$data);
            redirect(base_url()."student_controller", "refresh" );
        }



    }

}




?>