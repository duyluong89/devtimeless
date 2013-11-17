<?php
class dashboard extends SYS_Controller{
	
	function index(){
		
		$this->view =  "dashboard/index";
		$this->layout = "layouts/index";
	}
}