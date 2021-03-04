<?php
class patient extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('patient_model');
    $this->load->helper('url_helper');
  }
  public function newpatient()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('firstname', 'text', 'required');
    $this->form_validation->set_rules('lastname', 'text', 'required');
    $this->form_validation->set_rules('birthdate', 'text', 'required');
    $this->form_validation->set_rules('phone', 'phone', 'required');
    $this->form_validation->set_rules('mail', 'mail', 'required');

    if ($this->form_validation->run() === FALSE) {

      //  $this->load->view('templates/header');
      $this->load->view('newpatient');
      $this->load->view('templates/footer');
    } else {
      $this->patient_model->Addpatient();
      $this->load->view('news/success');
    }
  }
  public function showpatients()
  {
    $this->load->model("patient_model");
    $data["showPatients"] = $this->patient_model->showPatients();
    //$this->load->view("main_view");  
    $this->load->view("allpatient_view", $data);
  }
  public function showDetailsPatient()
  {
     echo "voili voilou";
     $this->load->model("patient_model");
     $this->patient_model->showDetailsPatient();
     $data["showDetailsPatient"] = $this->patient_model->showDetailsPatient();
    // $data["fetch_data"] = $this->patient->fetch_data();  
    // var_dump($data);
    $this->load->view("detailsPatient_view",$data);
  }
}
