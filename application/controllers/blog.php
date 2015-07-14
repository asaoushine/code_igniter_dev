<?php
class Blog extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Blog_model');
		# ここで model を読み込んでいる
	}

	function form(){
		$this->form_validation->set_rules('title', 'タイトル', 'required');
		# ここの構文を調べる
		if($this->form_validation->run() == FALSE) 
		# ここの構文を調べる
		{
			$this->load->view('blog/blog_form');
		} else {
			$this->Blog_model->insert_entry();
			# Blog_model 内の insert_entry() を実行
			# $_POST データを挿入
			$this->load->view('blog/success');
		}
	}

	function index(){
		$data['blogs'] = $this->Blog_model->get_blog_all();
		$this->load->view('blog/index', $data);
	}


}
?>
