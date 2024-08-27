<?php

class Reportcategorylistdetail_model extends CI_model {
    
    public function add_ReportCategoryListDetail($array) {
        try {
            if($this->db->insert('tbl_report_category_details',$array)){
                $reportcategorylistdetailid = $this->db->insert_id();
                return $reportcategorylistdetailid;
              } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }                  
    }

   

    public function getReportCategorylistDetail() {
                    try {
                        $this->db->select('*');
                        $this->db->from('tbl_report_category_details');
                        $query = $this->db->get();
                        if($query->num_rows() > 0) {
                            $reportcategorylistdetail = array();
                            foreach ($query->result_array() as $row) {
                                $reportcategorylistdetailarr = array(
                                    'report_category_detail_id' => $row['report_category_detail_id'],
                                    'report_category_list_id' => $row['report_category_list_id'],
                                    'report_category_list_id' => $row['report_category_list_id'],
                                    'report_category_list_name' => $this->getreportCategoryListNameByRCatListid($row['report_category_list_id']),
                                    'report_category_detail_title' => $row['report_category_detail_title'],
                                    'report_category_detail_description' => $row['report_category_detail_description'],
                                    'report_category_detail_download' => $row['report_category_detail_download'],
                                    'report_category_detail_image' => base_url()."assets/images/".$row['report_category_detail_image'],
                                    'report_category_detail_download_txt' => $row['report_category_detail_download_txt'],
                                    'status' => $row['status'],
                                    'created' => $row['created'],
                                    'modified' => $row['modified']
                                );

                                array_push($reportcategorylistdetail, $reportcategorylistdetailarr);
                            }
                            return $reportcategorylistdetail;
                            
                        } else {
                            return false;
                        }
                    } catch(Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }
                }

                public function getreportCategoryListNameByRCatListid($report_category_list_id) {
                    try {
                        $this->db->select('report_category_list_name');
                        $this->db->from('tbl_report_category_list');
                        $this->db->where('report_category_list_id', $report_category_list_id);
                        $query = $this->db->get();
                        if($this->db->affected_rows() > 0) {
                            return $query->row()->report_category_list_name;
                          } else {
                            return 0;
                        }
                    } catch (Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }        
                }

    public function geteditreportcategorylistDetailbyid($reportcategorylistdetail_id) {
            try {
                $this->db->select('*');
                $this->db->from('tbl_report_category_details');
                $this->db->where('report_category_detail_id',$reportcategorylistdetail_id);
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

        public function reportcategoryListDetailUpdate($report_category_detail_id, $array) {
            try {
                $this->db->where('report_category_detail_id', $report_category_detail_id);
                if($this->db->update('tbl_report_category_details', $array)) {
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

        public function deleteReportCategoryListDetail($report_category_detail_id) {
            try {
                $this->db->where('report_category_detail_id',$report_category_detail_id);  
                if($this->db->delete('tbl_report_category_details')) {
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

            
}