<?php
class SYS_Controller extends MY_Controller{
	function __construct(){
		parent::__construct();
		
		if($this->_controller != 'auth' && !$this->render->sys_logined()){
			redirect("/sys");
		}
	}
}