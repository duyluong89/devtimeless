<?php
class blockstatic extends SYS_Controller{
	function index(){
		$this->view="blockstatic/index";
		$this->layout= "layouts/index";
	}
}