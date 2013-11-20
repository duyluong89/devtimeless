<?php
class chat extends SYS_Controller{
	protected $models = array("chat");
	function __construct(){
		parent::__construct();

	}

	function post_chat(){
		$curent_user = $this->render->sys_logined(TRUE);
		$message = $this->input->post("message");
		$data_post  = array(
				'email'		=>	$curent_user->email,
				'name'		=>	$curent_user->name,
				'avatar'	=>	$curent_user->avatar,
				'message'	=>	$message
		);
		$this->chat->insert($data_post,TRUE);
	}

	function get_message(){

	}
}
?>