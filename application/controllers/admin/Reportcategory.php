<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportcategory extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('admin/reportcategory_model'); 
     }   

	    public function index() {
         if($this->session->has_userdata('logged_in')) {
          $data["reportcategories"] = $this->reportcategory_model->getReportCategory();
          $this->load->view('admin/template/header');
          $this->load->view('admin/reportcategory_master', $data);
          $this->load->view('admin/template/footer');
       } else {
         $this->load->view('admin/template/login_header');
         $this->load->view('admin/login_view');
         $this->load->view('admin/template/login_footer');
      }  
    }

        public function add() {
              if($this->session->has_userdata('logged_in')) {
               $reportcategory_name = $this->input->post('reportcategory_name');
               $status = $this->input->post('status');
               $array = array(
                   'report_category_name' => $reportcategory_name,
                   'status' => $status
               );
               $add = $this->reportcategory_model->add_ReportCategory($array);
               if($add > 0) {
               $this->session->set_flashdata('success_msg', 'Report Category Added Successfully !');
                      redirect('admin/reportcategory');
               } else {
               $this->session->set_flashdata('error_msg', "Unable to Add Report Category !");
                      redirect('admin/reportcategory');
              } 
            } else {
                    redirect('admin');
            }
        }

        public function edit() {
              if($this->session->has_userdata('logged_in')) {
                $reportcategory_id = $this->input->post('reportcategory_id');
                $data = $this->reportcategory_model->geteditreportcategorybyid($reportcategory_id);
                echo json_encode($data);
              } else {
                redirect('admin');
              }    
            }

      public function update() {
        if($this->session->has_userdata('logged_in')) {
            $reportcategory_id = $this->input->post('reportcategory_id');
            $reportcategory_name = $this->input->post('reportcategory_name');
            $status = $this->input->post('status');
           
            $array = array(
                   'report_category_name' => $reportcategory_name,
                   'status' => $status
                );
            
            $data = $this->reportcategory_model->reportcategoryUpdate($reportcategory_id, $array);
            if($data > 0) {
              $this->session->set_flashdata('success_msg', 'Report Category Updated Successfully !');

                redirect('admin/reportcategory');
             } else {
             $this->session->set_flashdata('error_msg', "Unable to Update Report Category !");

                      redirect('admin/reportcategory');
              } 
            } else {
            redirect('admin');
        } 
    }

    public function delete() {
        if($this->session->has_userdata('logged_in')) {
            $delete_category_id = $_POST["delete_category_id"]; 
            $deleteCat = $this->reportcategory_model->deleteReportCategory($delete_category_id);
            if($deleteCat) {
                 echo 'Success';
             } else {
                 echo 'Error';
             }
        } else {
            redirect('admin');
        }
    }

}