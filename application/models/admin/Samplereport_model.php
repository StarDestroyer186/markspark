<?php

class Samplereport_model extends CI_model {
    
    public function getSampleReportnfo() {
        try {
            $this->db->select('*');
            $this->db->from('tbl_sample_report_info');
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


} 