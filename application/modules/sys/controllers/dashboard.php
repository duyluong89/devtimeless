<?php
class dashboard extends SYS_Controller{
	protected $models = array("chat");
	function __construct(){
		parent::__construct();

	}
	function index(){
		$this->data['chats'] = $this->chat->get_all();
        $this->data['includeJquery'] = $this->load->view("dashboard/jquery",null,TRUE);
		$this->view =  "dashboard/index";
		$this->layout = "layouts/index";
	}
}