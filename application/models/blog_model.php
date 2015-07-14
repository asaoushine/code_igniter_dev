<?php
  class Blog_model extends CI_Model{

  	function __construct(){
  		parent::__construct();
  		$this->load->database();
  	}

  	function insert_entry(){
  		$this->data_post();
  		$this->db->insert('blog_data', $this);
  	}

  	function get_blog_all(){
  		$query = $this->db->get('blog_data');
  		return $query->result_array();
  	}

  	function get_blog($id){
  		$this->db->where('id', $id);
  		$query = $this->db->get('blog_data');
  		return $query->row_array();
  	}

  	function update_entry($id){
  		$this->data_post();
  		$this->db->where('id', $id);
  		$this->db->update('blog_data', $this);
  	}

  	function data_post(){
  		$this->title = $_POST['title'];
  		$this->description = $_POST['description'];
  	}

  	function delete_entry($id){
  		$this->db->where('id', $id);
  		$this->db->delete('blog_data');

  	}
  }