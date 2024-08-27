<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samplereport extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('admin/samplereport_model'); 
     }   

	    public function index() {
         if($this->session->has_userdata('logged_in')) {
          $data["samplereportinfo"] = $this->samplereport_model->getSampleReportnfo();
          $this->load->view('admin/template/header');
          $this->load->view('admin/samplereport_master', $data);
          $this->load->view('admin/template/footer');
       } else {
         $this->load->view('admin/template/login_header');
         $this->load->view('admin/login_view');
         $this->load->view('admin/template/login_footer');
      }  
    }

  }