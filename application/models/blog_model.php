<?php
  class Blog_model extends CI_Model{

  	function __construct(){
  		parent::__construct();
  		$this->load->database();
  	}

  	function insert_entry(){
  		$this->title = $_POST['title'];
  		$this->description = $_POST['description'];
  		$this->db->insert('blog_data', $this);
  	}

  	function get_blog_all(){
  		$query = $this->db->get('blog_data');
  		return $query->result_array();
  	}
  }