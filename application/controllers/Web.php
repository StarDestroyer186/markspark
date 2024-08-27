<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Web extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('frontweb/reportcategoryweb_model');  
    }
    
    public function index() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		      $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/index');
          $this->load->view('website_pages/templates/footer');
    }

    public function about() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/who-we-are');
          $this->load->view('website_pages/templates/footer');
    }

    public function research_methodology() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/research-methdology');
          $this->load->view('website_pages/templates/footer');
    }

    public function client_testimonials() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/Client-testimonials');
          $this->load->view('website_pages/templates/footer');
    }

    public function why_choose_us() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/why-choose-us');
          $this->load->view('website_pages/templates/footer');
    }

    public function consulting_model() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/consulting-model');
          $this->load->view('website_pages/templates/footer');
    }

    public function syndicate_client() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/syndicate-model');
          $this->load->view('website_pages/templates/footer');
    }

    public function branding_consumer() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/brand-tracking');
          $this->load->view('website_pages/templates/footer');
    }

    public function contact_us() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/contact-us');
          $this->load->view('website_pages/templates/footer');
    }

    public function privacy_policy() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/Privacy-policy');
          $this->load->view('website_pages/templates/footer');
    }

    public function term_conditions() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/Terms&conditions');
          $this->load->view('website_pages/templates/footer');
    }

    public function blog() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/blog');
          $this->load->view('website_pages/templates/footer');
    }

    public function press_release() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/press_release');
          $this->load->view('website_pages/templates/footer');
    }

    public function reports() { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $data["reportcategorieslistweb"] = $this->reportcategoryweb_model->getReportCategoryListWeb();
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/reports', $data);
          $this->load->view('website_pages/templates/footer');
    }

    
    public function reportsCatwise($reportcategory_name, $reportcategory_id) { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $data["reportcategorieslistwebcatwise"] = $this->reportcategoryweb_model->getReportCategoryListWebCatid($reportcategory_id);
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/reports_categorywise', $data);
          $this->load->view('website_pages/templates/footer');
    }
    

    public function report_details($reportcategorylist_id) { 
          $data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
          $data["reportcategorieslistdetailweb"] = $this->reportcategoryweb_model->getReportCategoryListDetailWeb($reportcategorylist_id);

          /*echo '<pre>';
          print_r($data["reportcategorieslistdetailweb"]);
          exit;*/
          $this->load->view('website_pages/templates/header', $data);
          $this->load->view('website_pages/reports-details', $data);
          $this->load->view('website_pages/templates/footer');
    }

}