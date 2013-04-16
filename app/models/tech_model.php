<?php
class Tech_model extends CI_Model{
	public function __construct()
	{
	$this->load->database();
	}
public function get_category($slug=FALSE)
{
	if($slug=== FALSE)
	{
		$this->db->select('cattitle,catalias,catid');
		$query=$this->db->get('jos_categories');
		return $query->result_array();
	}
	 $this->db->select('*');
	 $query= $this->db->get_where('jos_content', array('catid'=>$slug));
	 return $query->result_array();
	}


public function get_details($slug=FALSE)
{
	if($slug=== FALSE)
	{
		$this->db->select('cattitle,catalias,catid');
		$query=$this->db->get('jos_categories');
		return $query->result_array();
	}
	 $this->db->select('*');
	 $query= $this->db->get_where('jos_content', array('alias'=>$slug));
	 return $query->row_array();
	}
	
	public function set_news()
{
	$this->load->helper('url');
	$dat = date("Y-m-d H:i:s");
	$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
	$data = array(
		'title' => $this->input->post('title'),
		'alias' => $slug,
		'introtext' => $this->input->post('introtext'),
		 'created'    => $dat,
		 'catid'=>$this->input->post('drop'),
		 'created_by_alias'=>$this->input->post('author')
	);
	
	return $this->db->insert('jos_content', $data);
}
}
