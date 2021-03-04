<?php
class patient_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function Addpatient()
    {
        $this->load->helper('url');
        //var_dump($this->input->post('firstname'));
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'birthdate' => $this->input->post('birthdate'),
            'phone' => $this->input->post('phone'),
            'mail' => $this->input->post('mail')
        );

        return $this->db->insert('patients', $data);
    }
    public function showPatients()
    {
        $this->db->select("*");
        $this->db->from("patients");
        $query = $this->db->get();
        return $query;
    }
    public function showDetailsPatient()
    {
        $id = $this->input->post('id');
        echo  $this->input->post('id');
        $this->db->where("id", $id);
        $query = $this->db->get("patients");
        return $query;
        var_dump($query);
        //Select * FROM tbl_user where id = '$id'  
    }
}
