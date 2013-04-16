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
}
