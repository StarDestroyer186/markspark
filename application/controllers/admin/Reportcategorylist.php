<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportcategorylist extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('admin/reportcategory_model');
        $this->load->model('admin/reportcategorylist_model'); 
     }   

	    public function index() {
         if($this->session->has_userdata('logged_in')) {
          $data["reportcategorieslist"] = $this->reportcategorylist_model->getReportCategorylist();
          $data["reportcategories"] = $this->reportcategory_model->getReportCategory();
          $this->load->view('admin/template/header');
          $this->load->view('admin/reportcategorylist_master', $data);
          $this->load->view('admin/template/footer');
       } else {
         $this->load->view('admin/template/login_header');
         $this->load->view('admin/login_view');
         $this->load->view('admin/template/login_footer');
      }  
    }

        public function add() {
              if($this->session->has_userdata('logged_in')) {
               $report_category_id = $this->input->post('report_category_id');
               $report_category_list_name = $this->input->post('report_category_list_name');
               $report_category_list_download = $this->input->post('report_category_list_download');
               $status = $this->input->post('status');
               $array = array(
                   'report_category_id' => $report_category_id,
                   'report_category_list_name' => $report_category_list_name,
                   'report_category_list_download' => $report_category_list_download,
                   'status' => $status
               );
               $add = $this->reportcategorylist_model->add_ReportCategoryList($array);
               if($add > 0) {
               $this->session->set_flashdata('success_msg', 'Report Category List Added Successfully !');
                      redirect('admin/reportcategorylist');
               } else {
               $this->session->set_flashdata('error_msg', "Unable to Add Report Category List !");
                      redirect('admin/reportcategorylist');
              } 
            } else {
                    redirect('admin');
            }
        }

        public function edit() {
              if($this->session->has_userdata('logged_in')) {
                $reportcategorylist_id = $this->input->post('reportcategorylist_id');
                $data = $this->reportcategorylist_model->geteditreportcategorylistbyid($reportcategorylist_id);
                echo json_encode($data);
              } else {
                redirect('admin');
              }    
            }

      public function update() {
        if($this->session->has_userdata('logged_in')) {
               $report_category_list_id = $this->input->post('report_category_list_id');
               $report_category_id = $this->input->post('report_category_id');
               $report_category_list_name = $this->input->post('report_category_list_name');
               $report_category_list_download = $this->input->post('report_category_list_download');
               $status = $this->input->post('status');
               $array = array(
                   'report_category_id' => $report_category_id,
                   'report_category_list_name' => $report_category_list_name,
                   'report_category_list_download' => $report_category_list_download,
                   'status' => $status
               );
            $data = $this->reportcategorylist_model->reportcategoryListUpdate($report_category_list_id, $array);
            if($data > 0) {
              $this->session->set_flashdata('success_msg', 'Report Category List Updated Successfully !');

                redirect('admin/reportcategorylist');
             } else {
             $this->session->set_flashdata('error_msg', "Unable to Update Report Category List !");

                      redirect('admin/reportcategorylist');
              } 
            } else {
            redirect('admin');
        } 
    }

    public function delete() {
        if($this->session->has_userdata('logged_in')) {
            $delete_category_list_id = $_POST["delete_category_list_id"]; 
            $deleteCatList = $this->reportcategorylist_model->deleteReportCategoryList($delete_category_list_id);
            if($deleteCatList) {
                 echo 'Success';
             } else {
                 echo 'Error';
             }
        } else {
            redirect('admin');
        }
    }

}