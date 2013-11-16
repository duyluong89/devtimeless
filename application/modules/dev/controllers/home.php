<?php
class home extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		
		$this->view = "home/index";
		$this->layout = "layouts/index";
	}
}