<?php

/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 12.10.2016
 * Time: 15:13
 */
class Student_model extends CI_Model
{

    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {

    }

    public function get()
    {
        $query = $this->db->get('students');
        return $query->result();
    }

    public function insert($data)
    {
        if ($this->db->insert("students",$data))
            return true;
    }

    public function delete($id)
    {
        $this->db->delete('students', array("student_id" => $id));
        return true;
    }

    public function update_data($id,$new_data)
    {
        $this->db->where('student_id', $id);
        $this->db->update('students', $new_data);
        return true;

    }
}

?>