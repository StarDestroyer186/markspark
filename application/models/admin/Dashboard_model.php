<?php

class Dashboard_model extends CI_model {
    
    public function index() {

    }

    public function customerCount() {
        try {
            $num_rows = $this->db->count_all_results('tbl_customer');
            return $num_rows;
          } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }
    }

    public function salesCount() {
        try {
            $num_rows = $this->db->count_all_results('tbl_sales');
            return $num_rows;
          } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }
    }


    public function emiCount() {
        try {
            $num_rows = $this->db->count_all_results('tbl_emi');
            return $num_rows;
          } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }
    }

    public function paymentCount() {
        try {
            $num_rows = $this->db->count_all_results('tbl_payment');
            return $num_rows;
          } catch (Exception $ex) {
            error_log($ex->getTraceAsString());
            echo $ex->getTraceAsString();
            return false;
        }
    }

    /*public function getProfileInfo($type, $id) {
            try {
                if($type == "Vendor") {
                $this->db->select('*');
                $this->db->from('vendors');
                $this->db->where('id',$id);
                $selquery = $this->db->get();
                if($this->db->affected_rows() > 0) {
                    return $selquery->row();         
                } else {
                    return false;
                }
            } else {
                $this->db->select('*');
                $this->db->from('business');
                $this->db->where('business_id',$id);
                $selquery = $this->db->get();
                if($this->db->affected_rows() > 0) {
                    return $selquery->row();         
                } else {
                    return false;
                }

            }
                
            } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return FALSE;
            } 
        }*/

        public function getProfileInfoVendor($id) {
            try {
                $this->db->select('*');
                $this->db->from('vendors');
                $this->db->where('id', $id);
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

        public function getProfileInfoBusiness($id) {
            try {
                $this->db->select('*');
                $this->db->from('business');
                $this->db->where('business_id',$id);
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

        public function getAllKarigarCounts() {
            try {
                $this->db->where('type', 'Vendor');
                $this->db->from("vendors");
                $num_rows = $this->db->count_all_results();
                return $num_rows;
              } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return false;
            }
        }

        public function getAllVendorCounts() {
            try {
                $this->db->where('type', 'Business');
                $this->db->from("vendors");
                $num_rows = $this->db->count_all_results();
                return $num_rows;
              } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return false;
            }
        }

        public function getAllEnquiryCounts() {
            try {
                $this->db->from("enquiry");
                $num_rows = $this->db->count_all_results();
                return $num_rows;
              } catch (Exception $ex) {
                error_log($ex->getTraceAsString());
                echo $ex->getTraceAsString();
                return false;
            }
        }

        public function getTodayEnquiryCounts() {
            try {
            $curr_date = date('Y-m-d');
            $this->db->select('enquiry_id');
            $this->db->from('enquiry');
            $this->db->where('DATE(created)', $curr_date);
            return $this->db->count_all_results();
            } catch(Exception $ex) {
            error_log($ex->getTraceAsString());
            return 0;
            }
        }

        public function getProfileInfoKarigarVendorByID($id) {
                try {
                    $this->db->select('*');
                    $this->db->from('vendors');
                    $this->db->where('id', $id);
                    $query = $this->db->get();
                    if($query->num_rows() > 0) {
                        //$vendordetails = array();
                        $type = $query->row()->type;
                        if($type == "Vendor") {
                            $category_name = $this->getVendorCatName($query->row()->category_id);
                            $gallery = $this->getVendorGallery($query->row()->id);
                        } else {
                            $category_name = $this->getBusinessCatName($query->row()->category_id);
                            $gallery = $this->getBusinessGallery($query->row()->id);
                        }
                        $vendordetailsarr = array(
                            'id' => $query->row()->id,
                            'name' => $query->row()->name,
                            'email' => $query->row()->email,
                            'mobile' => $query->row()->mobile,
                            'address' => $query->row()->address,
                            'gender' => $query->row()->gender,
                            'profile_pic' => $query->row()->profile,
                            'category_name' => $category_name,
                            'type' => $type,
                            'gallery' => $gallery
                            );

                            //array_push($vendordetails, $vendordetailsarr);
                        return $vendordetailsarr;
                    } else {
                        return false;
                    }
                } catch(Exception $ex) {
                    error_log($ex->getTraceAsString());
                    echo $ex->getTraceAsString();
                    return FALSE;
                }
            }

            public function getVendorCatName($category_id) {
                    try {
                        $this->db->select('category_name');
                        $this->db->from('categories');
                        $this->db->where('category_id', $category_id);
                        $query = $this->db->get();
                        if($this->db->affected_rows() > 0) {
                            return $query->row()->category_name;
                          } else {
                            return 0;
                        }
                    } catch (Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }        
                }

                public function getBusinessCatName($category_id) {
                    try {
                        $this->db->select('businesscategory_name');
                        $this->db->from('businesscategory');
                        $this->db->where('businesscategoryid', $category_id);
                        $query = $this->db->get();
                        if($this->db->affected_rows() > 0) {
                            return $query->row()->businesscategory_name;
                          } else {
                            return 0;
                        }
                    } catch (Exception $ex) {
                        error_log($ex->getTraceAsString());
                        echo $ex->getTraceAsString();
                        return FALSE;
                    }        
                }

                public function getVendorGallery($id) {
                    try {
                        $this->db->select('*');
                        $this->db->from('vendor_gallery');
                        $this->db->where('vendor_id', $id);
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

                public function getBusinessGallery($id) {
                    try {
                        $this->db->select('*');
                        $this->db->from('business_gallery');
                        $this->db->where('business_person_id', $id);
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