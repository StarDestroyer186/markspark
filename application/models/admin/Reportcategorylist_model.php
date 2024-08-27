<?php

class Reportcategorylist_model extends CI_model {
    
    public function add_ReportCategoryList($array) {
        try {
            if($this->db->insert('tbl_report_category_list',$array)){
                $reportcategorylistid = $this->db->insert_id();
                return $reportcategorylistid;
              } else {
                return false;
            }
        } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }                  
    }

   

    public function getReportCategorylist() {
                    try {
                        $this->db->select('*');
                        $this->db->from('tbl_report_category_list');
                        $query = $this->db->get();
                        if($query->num_rows() > 0) {
                            $reportcategorylist = array();
                            foreach ($query->result_array() as $row) {
                                $reportcategorylistarr = array(
                                    'report_category_list_id' => $row['report_category_list_id'],
                                    'report_category_id' => $row['report_category_id'],
                                    'report_category_name' => $this->getreportCategoryNameByRCatid($row['report_category_id']),
                                    'report_category_list_name' => $row['report_category_list_name'],
                                    'report_category_list_download' => $row['report_category_list_download'],
                                    'status' => $row['status'],
                                    'created' => $row['created'],
                                    'modified' => $row['modified']
                                );

                                array_push($reportcategorylist, $reportcategorylistarr);
                            }
                            return $reportcategorylist;
                            
                        } else {
                            return false;
                        }
                    } catch(Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }
                }

                public function getreportCategoryNameByRCatid($report_category_id) {
                    try {
                        $this->db->select('report_category_name');
                        $this->db->from('tbl_report_categories');
                        $this->db->where('report_category_id', $report_category_id);
                        $query = $this->db->get();
                        if($this->db->affected_rows() > 0) {
                            return $query->row()->report_category_name;
                          } else {
                            return 0;
                        }
                    } catch (Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }        
                }

    public function geteditreportcategorylistbyid($reportcategorylist_id) {
            try {
                $this->db->select('*');
                $this->db->from('tbl_report_category_list');
                $this->db->where('report_category_list_id',$reportcategorylist_id);
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

        public function reportcategoryListUpdate($report_category_list_id, $array) {
            try {
                $this->db->where('report_category_list_id', $report_category_list_id);
                if($this->db->update('tbl_report_category_list', $array)) {
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

        public function deleteReportCategoryList($delete_category_list_id) {
            try {
                $this->db->where('report_category_list_id',$delete_category_list_id);  
                if($this->db->delete('tbl_report_category_list')) {
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