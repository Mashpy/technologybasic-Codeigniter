<?php
class Terms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tech_model');
	}

	public function index()
{
	$data['category'] = $this->tech_model->get_category();
	$this->load->view('terms/index', $data);

}

	public function view($slug)
{
	$data['term_item'] = $this->tech_model->get_category($slug);

	if (empty($data['term_item']))
	{
		show_404();
	}

	$this->load->view('terms/view', $data);
	
}

}