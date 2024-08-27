<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->model('admin/login_model');
        $this->load->model('admin/PassHash_Model');  
    }
    
    public function index() {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username === "" || $password ==="") {
            $this->session->set_flashdata('login_failed','Please Enter Username & Password !');
            redirect('admin');
        } else {
            $getPassword = $this->login_model->getPassword($username);
            $chk_pass = $this->PassHash_Model->check_password($getPassword, $password); 
            if($chk_pass) { 
                $data = $this->login_model->login_user($username, $getPassword);
                $session_array = array(
                    'userid' => $data->id,
                    'session_data' => $data,
                    'logged_in' => true
                );
                $this->session->set_userdata($session_array);
                redirect('admin');
            } else {
                $this->session->set_flashdata('login_failed','Invalid Username or Password !');
                redirect('admin');
            }
        }   
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin');   
    }
}
?>