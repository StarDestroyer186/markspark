<?php

class Reportcategory_model extends CI_model {
    
    public function add_ReportCategory($array) {
        try {
            if($this->db->insert('tbl_report_categories',$array)){
                $reportcategoryid = $this->db->insert_id();
                return $reportcategoryid;
              } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }                  
    }

    public function getReportCategory() {
        try {
            $this->db->select('*');
            $this->db->from('tbl_report_categories');
            $selquery = $this->db->get();
            if($this->db->affected_rows() > 0) {
               return $selquery->result_array();   
             } else {
               return false;
            }   
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }   
    } 

    public function geteditreportcategorybyid($reportcategory_id) {
            try {
                $this->db->select('*');
                $this->db->from('tbl_report_categories');
                $this->db->where('report_category_id',$reportcategory_id);
                $selquery = $this->db->get();
                if($this->db->affected_rows() > 0) {
                    return $selquery->row();         
                } else {
                    return false;
                }
            } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return FALSE;
            } 
        }

        public function reportcategoryUpdate($reportcategory_id, $array) {
            try {
                $this->db->where('report_category_id', $reportcategory_id);
                if($this->db->update('tbl_report_categories', $array)) {
                    return true;
                } else {
                    return false;
                }
            } catch(Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return FALSE;
            }
        } 

        public function deleteReportCategory($delete_category_id) {
            try {
                $this->db->where('report_category_id',$delete_category_id);  
                if($this->db->delete('tbl_report_categories')) {
                   return TRUE;
                } else {
                   return false;
                }  
            } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return FALSE;
            } 
        }


    public function updateAdminPassword($pass_hash) {
        try {
            $id = 1;
            $this->db->set('password',$pass_hash);
            $this->db->where('id',$id);
            if($this->db->update('tbl_admin')) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }   
    }

            
}