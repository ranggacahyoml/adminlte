<?php
/**
* 
*/
class user extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("user_m");
	}
	public function form(){
		$this->load->view('form_user_v');
	}
	public function add(){
		$data = array(
			"username" => $this->input->post
			("username"),
			"password" => $this->input->post
			("password"),
			"fullname" => $this->input->post
			("fullname"),
			"level" => $this->input->post
			("level"),
		);
	var_dump($data); 

	$this->user_m->add($data);

	}
}

?>