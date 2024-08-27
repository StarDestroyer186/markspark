<?php

 class Login_model extends CI_model {

    public function getPassword($username) {
        try {
            $this->db->select('password');
            $this->db->from('tbl_admin');
            $this->db->where('username',$username);
            $query = $this->db->get();
            if($this->db->affected_rows() > 0) {
                return $query->row()->password ;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }        
    }
     
    public function login_user($user,$pass) {
        try {
            $this->db->select('*');
            $this->db->from('tbl_admin');
            $this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get();
            if($this->db->affected_rows() > 0) {
                return $query->row();
            } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }   
    }

    public function login_vendor($mobile,$pass) {
        try {
            $this->db->select('*');
            $this->db->from('vendors'); 
            $this->db->where('mobile',$mobile);
            $this->db->where('password',$pass);
            $query = $this->db->get();
            if($this->db->affected_rows() > 0) {
                return $query->row_array();
            } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }   
    }

    public function vendorExistsCheck($mobile) {
        try {
            $this->db->select('*');
            $this->db->from('vendors'); 
            $this->db->where('mobile', $mobile);
            $query = $this->db->get();
            if($this->db->affected_rows() > 0) {
                return $query->row_array();
            } 
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return FALSE;
        }   
    }

    

 }   

?>    