<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changeadminpassword extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('admin/PassHash_Model'); 
        $this->load->model('admin/reportcategory_model'); 
     }   

	    public function index() {
         if($this->session->has_userdata('logged_in')) {
          //$data["samplereportinfo"] = $this->samplereport_model->getSampleReportnfo();
          $this->load->view('admin/template/header');
          $this->load->view('admin/changeadminpassword_master');
          $this->load->view('admin/template/footer');
       } else {
         $this->load->view('admin/template/login_header');
         $this->load->view('admin/login_view');
         $this->load->view('admin/template/login_footer');
      }  
    }


    public function changecustomerpassword() {
              if($this->session->has_userdata('logged_in')) {

                /*echo "hghg";
                exit;*/
               //$sesscustomerid = $this->session->userdata('vendor_session_data')->customer_id;
               $new_password = $this->input->post('new_password');
               $confirm_new_password = $this->input->post('confirm_new_password');

               /*echo $new_password. ' + ' .$confirm_new_password;
               exit;*/ 
               
               //$getoldpass = $this->customer_model->getOldPasswordByCustomerId($sesscustomerid);
                
                //$chk_old_password = $this->PassHash_Model->check_password($getoldpass, $old_password);
                
                    //if($chk_old_password > 0) {

               if($new_password == $confirm_new_password) {
                        $pass_hash = $this->PassHash_Model->hash($confirm_new_password);
                        $updatepassword = $this->reportcategory_model->updateAdminPassword($pass_hash);
                        if($updatepassword > 0) {
                            $this->session->set_flashdata('success_msg', "Password changed successfully !");
                            redirect('admin/changeadminpassword');
                        } else {
                            $this->session->set_flashdata('error_msg', "Unable to change password !");
                            redirect('admin/changeadminpassword');
                        }
                    } else {
                        $this->session->set_flashdata('error_msg', "Old password is not correct !");

                        redirect('admin/changeadminpassword');
                    }            

           
            } else {

            redirect('admin');


          }

        } 

  }