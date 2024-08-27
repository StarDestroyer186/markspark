<?php

class Reportcategoryweb_model extends CI_model {
    
    public function getReportCategoryWeb() {
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

    public function getReportCategoryListWeb() {
        try {
            $this->db->select('*');
            $this->db->from('tbl_report_category_list');
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


     public function getReportCategoryListWebCatid($reportcategory_id) {
        try {
            $this->db->select('*');
            $this->db->from('tbl_report_category_list');
            $this->db->where('report_category_id', $reportcategory_id);
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

    public function getReportCategoryListDetailWeb($reportcategorylist_id) {
        try {
            $this->db->select('*');
            $this->db->from('tbl_report_category_details');
            $this->db->where('report_category_list_id', $reportcategorylist_id);
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

	public function getReportCategoryListByKeyword($keyword) {
		try {
			$this->db->select('report_category_detail_title, report_category_detail_id');
			$this->db->from('tbl_report_category_details');
			$this->db->like('report_category_detail_title', $keyword);
			$selquery = $this->db->get();
			
			if ($selquery->num_rows() > 0) {
				return $selquery->result();
			} else {
				return false;
			}
		} catch (Exception $ex) {
			error_log($ex->getMessage());
			echo $ex->getMessage();
			return false;
		}
	}

	public function insert_form_data($data) {
        return $this->db->insert('tbl_modal_form', $data);
    }
	
	public function insert_submission($data) {
        return $this->db->insert('contact_form_submissions', $data);
    }
}
