<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Web extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('frontweb/reportcategoryweb_model');
	}

	public function index()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/index');
		$this->load->view('website_pages/templates/footer');
	}

	public function about()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/who-we-are');
		$this->load->view('website_pages/templates/footer');
	}

	public function pricing()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/pricing');
		$this->load->view('website_pages/templates/footer');
	}

	public function research_methodology()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/research-methdology');
		$this->load->view('website_pages/templates/footer');
	}

	public function client_testimonials()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/Client-testimonials');
		$this->load->view('website_pages/templates/footer');
	}

	public function why_choose_us()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/why-choose-us');
		$this->load->view('website_pages/templates/footer');
	}

	public function consulting_model()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/consulting-model');
		$this->load->view('website_pages/templates/footer');
	}

	public function syndicate_client()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/syndicate-model');
		$this->load->view('website_pages/templates/footer');
	}

	public function branding_consumer()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/brand-tracking');
		$this->load->view('website_pages/templates/footer');
	}

	public function contact_us()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/contact-us');
		$this->load->view('website_pages/templates/footer');
	}

	public function privacy_policy()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/Privacy-policy');
		$this->load->view('website_pages/templates/footer');
	}

	public function term_conditions()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/Terms&conditions');
		$this->load->view('website_pages/templates/footer');
	}

	public function blog()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/blog');
		$this->load->view('website_pages/templates/footer');
	}

	public function press_release()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/press_release');
		$this->load->view('website_pages/templates/footer');
	}

	public function reports()
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$data["reportcategorieslistweb"] = $this->reportcategoryweb_model->getReportCategoryListWeb();
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/reports', $data);
		$this->load->view('website_pages/templates/footer');
	}


	public function reportsCatwise($reportcategory_name, $reportcategory_id)
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$data["reportcategorieslistwebcatwise"] = $this->reportcategoryweb_model->getReportCategoryListWebCatid($reportcategory_id);
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/reports_categorywise', $data);
		$this->load->view('website_pages/templates/footer');
	}


	public function report_details($reportcategorylist_id)
	{
		$data["reportcategoriesweb"] = $this->reportcategoryweb_model->getReportCategoryWeb();
		$data["reportcategorieslistdetailweb"] = $this->reportcategoryweb_model->getReportCategoryListDetailWeb($reportcategorylist_id);
		$this->load->view('website_pages/templates/header', $data);
		$this->load->view('website_pages/reports-details', $data);
		$this->load->view('website_pages/templates/footer');
	}

	public function report_details_on_keyup($keyword)
	{
		$reportCategoriesListDetail = $this->reportcategoryweb_model->getReportCategoryListByKeyword($keyword);
		if ($reportCategoriesListDetail) {
			echo json_encode(array("status" => "success", "data" => $reportCategoriesListDetail));
		} else {
			echo json_encode(array("status" => "success", "data" => "No Data Found"));
		}
	}

	// Function to handle the form submission
	public function submit_modal_form()
	{
		// Fetch data from POST request
		$data = array(
			'modal_title' => $this->input->post('modal_title'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'company' => $this->input->post('company'),
			'requirements' => $this->input->post('requirements'),
			// Add any additional fields here
		);

		// Insert data into the database
		$inserted = $this->reportcategoryweb_model->insert_form_data($data);

		if ($inserted) {
			// Success response
			echo json_encode(['status' => 'success', 'message' => 'Form submitted successfully!']);
		} else {
			// Error response
			echo json_encode(['status' => 'error', 'message' => 'Failed to submit the form.']);
		}
	}

	public function submit_contact_form()
	{
		// Check if the request is a POST request
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			// Retrieve form data
			$data = array(
				'name' => $this->input->post('name', TRUE),
				'email' => $this->input->post('email', TRUE),
				'phone' => $this->input->post('phone', TRUE),
				'company' => $this->input->post('company', TRUE),
				'message' => $this->input->post('message', TRUE)
			);

			// Insert data into the database
			if ($this->reportcategoryweb_model->insert_submission($data)) {
				// Send a success response
				echo json_encode(array('status' => 'success', 'message' => 'Form submitted successfully!'));
			} else {
				// Send an error response
				echo json_encode(array('status' => 'error', 'message' => 'An error occurred while submitting the form.'));
			}
		} else {
			// Send a bad request response
			show_404();
		}
	}
}
