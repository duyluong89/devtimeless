<?php

class home extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('render');
	}
	
	function index(){
       	$this->content("da");
		$this->left("dđsss");
		$this->view =  "layouts/2columns-left";
		$this->layout = "layouts/index";
		
	}
}