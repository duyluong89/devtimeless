<?php
class user extends SYS_Controller{
	function __construct(){
		parent::__construct();
		$this->breadcrumb->append_crumb('User', create_url('sys/user'));
	}
	
	function index(){
		if ($this->input->is_ajax_request()) {
			$this->_process();
			return;
		}
        $this->data['includeJquery'] = $this->load->view("user/jquery",null,TRUE);
		$this->view = "user/list";
        $this->layout = "layouts/index";
	}
}