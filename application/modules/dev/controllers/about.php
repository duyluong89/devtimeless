<?php
class about extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->layout = "layouts/index";
	}
	
	function index(){
		
		$this->view		= 	"about/index";
	
	}
}