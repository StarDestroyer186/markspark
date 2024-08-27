<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportcategorylistdetail extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('admin/reportcategory_model');
        $this->load->model('admin/reportcategorylist_model'); 
        $this->load->model('admin/reportcategorylistdetail_model'); 
     }   

	    public function index() {
         if($this->session->has_userdata('logged_in')) {
          $data["reportcategorieslistdetail"] = $this->reportcategorylistdetail_model->getReportCategorylistDetail();
           $data["reportcategorieslist"] = $this->reportcategorylist_model->getReportCategorylist();
          /*echo '<pre>';
          print_r($data["reportcategorieslistdetail"]);
          exit;*/
          $this->load->view('admin/template/header');
          $this->load->view('admin/reportcategorylistdetail_master', $data);
          $this->load->view('admin/template/footer');
       } else {
         $this->load->view('admin/template/login_header');
         $this->load->view('admin/login_view');
         $this->load->view('admin/template/login_footer');
      }  
    }

        public function add() {
              if($this->session->has_userdata('logged_in')) {
               $report_category_list_id = $this->input->post('report_category_list_id');
               $report_category_detail_title = $this->input->post('report_category_detail_title');
               $report_category_detail_description = $this->input->post('report_category_detail_description');
               $report_category_detail_download = $this->input->post('report_category_detail_download');
               $report_category_detail_download_txt = $this->input->post('report_category_detail_download_txt');
               $status = $this->input->post('status');
               
               $report_category_detail_image = $_FILES['report_category_detail_image']['name'];
               if(!empty($report_category_detail_image)) {
                  $config['upload_path'] = './assets/images/';
                  $config['allowed_types'] = 'jpg|png|gif|jpeg';
                  $config['file_name'] = time().'.jpg';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
                  if(!$this->upload->do_upload('report_category_detail_image')) {
                  $errors = array('error' => $this->upload->display_errors());
                  error_log($errors['error']);
                  } else {
                      $data = array('upload_data' => $this->upload->data());
                      $post_image = $data['upload_data']['file_name'];
                    }
                } 

               $array = array(
                   'report_category_list_id' => $report_category_list_id,
                   'report_category_detail_title' => $report_category_detail_title,
                   'report_category_detail_description' => $report_category_detail_description,
                   'report_category_detail_download' => $report_category_detail_download,
                   'report_category_detail_image' => $post_image,
                   'report_category_detail_download_txt' => $report_category_detail_download_txt,
                   'status' => $status
               );
               $add = $this->reportcategorylistdetail_model->add_ReportCategoryListDetail($array);
               if($add > 0) {
               $this->session->set_flashdata('success_msg', 'Report List Detail Added Successfully !');
                      redirect('admin/reportcategorylistdetail');
               } else {
               $this->session->set_flashdata('error_msg', "Unable to Add Report List Detail !");
                      redirect('admin/reportcategorylistdetail');
              } 
            } else {
                    redirect('admin');
            }
        }

        public function edit() {
              if($this->session->has_userdata('logged_in')) {
                $reportcategorylistdetail_id = $this->input->post('reportcategorylistdetail_id');
                $data = $this->reportcategorylistdetail_model->geteditreportcategorylistDetailbyid($reportcategorylistdetail_id);
                echo json_encode($data);
              } else {
                redirect('admin');
              }    
            }

      public function update() {
              if($this->session->has_userdata('logged_in')) {
               $report_category_detail_id = $this->input->post('report_category_detail_id');
               $report_category_list_id = $this->input->post('report_category_list_id');
               $report_category_detail_title = $this->input->post('report_category_detail_title');
               $report_category_detail_description = $this->input->post('report_category_detail_description');
               $report_category_detail_download = $this->input->post('report_category_detail_download');
               $report_category_detail_download_txt = $this->input->post('report_category_detail_download_txt');
               $status = $this->input->post('status');

               $report_category_detail_image = $_FILES['report_category_detail_image']['name'];

               $data = $this->reportcategorylistdetail_model->geteditreportcategorylistDetailbyid($report_category_detail_id);
               
               if(empty($report_category_detail_image)) { 
                $post_image = $data->report_category_detail_image;
                }

               if(!empty($report_category_detail_image)) {
                  $config['upload_path'] = './assets/images/';
                  $config['allowed_types'] = 'jpg|png|gif|jpeg';
                  $config['file_name'] = time().'.jpg';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
                  if(!$this->upload->do_upload('report_category_detail_image')) {
                  $errors = array('error' => $this->upload->display_errors());
                  error_log($errors['error']);
                  } else {
                      $data = array('upload_data' => $this->upload->data());
                      $post_image = $data['upload_data']['file_name'];
                    }
                }
            
                $array = array(
                   'report_category_list_id' => $report_category_list_id,
                   'report_category_detail_title' => $report_category_detail_title,
                   'report_category_detail_description' => $report_category_detail_description,
                   'report_category_detail_download' => $report_category_detail_download,
                   'report_category_detail_image' => $post_image,
                   'report_category_detail_download_txt' => $report_category_detail_download_txt,
                   'status' => $status
               );
            
            $data = $this->reportcategorylistdetail_model->reportcategoryListDetailUpdate($report_category_detail_id, $array);
            if($data > 0) {
              $this->session->set_flashdata('success_msg', 'Report List Detail Updated Successfully !');

                redirect('admin/reportcategorylistdetail');
             } else {
             $this->session->set_flashdata('error_msg', "Unable to Update Report List Detail !");

                      redirect('admin/reportcategorylistdetail');
              } 
            } else {
            redirect('admin');
        } 
    }

    public function delete() {
        if($this->session->has_userdata('logged_in')) {
            $report_category_detail_id = $_POST["report_category_detail_id"]; 
            $deleteCatListDetail = $this->reportcategorylistdetail_model->deleteReportCategoryListDetail($report_category_detail_id);
            if($deleteCatListDetail) {
                 echo 'Success';
             } else {
                 echo 'Error';
             }
        } else {
            redirect('admin');
        }
    }

}