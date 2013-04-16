<?php
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tech_model');
	}
public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a Term item';
	
	$this->form_validation->set_rules('title', 'title', 'required');
	$this->form_validation->set_rules('introtext', 'text', 'required');
	$this->form_validation->set_rules('author','author','required');
	
	if ($this->form_validation->run() === FALSE)
	{
		
		$this->load->view('admin/create');
	
		
	}
	else
	{
		$this->tech_model->set_news();
		$this->load->view('admin/success');
	}
}
}