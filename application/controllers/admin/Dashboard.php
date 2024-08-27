<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('admin/dashboard_model'); 
    }
    
    public function index() { 	
        if($this->session->has_userdata('logged_in')) {
          /*$data["karigarcount"] = $this->dashboard_model->getAllKarigarCounts();
          $data["vendorcount"] = $this->dashboard_model->getAllVendorCounts();
          $data["enquirycount"] = $this->dashboard_model->getAllEnquiryCounts();
          $data["todayenquirycount"] = $this->dashboard_model->getTodayEnquiryCounts();*/
          $this->load->view('admin/template/header');
          $this->load->view('admin/dashboard');
          $this->load->view('admin/template/footer');
        } else {
          $this->load->view('admin/template/login_header');
          $this->load->view('admin/login_view');
          $this->load->view('admin/template/login_footer');
        }
    }

}