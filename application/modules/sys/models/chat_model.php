<?php
class chat_model extends MY_Model{
	protected $table 			= 'chat';
	protected $fields 			= array("id","email","name","avatar","message","create_at");
	protected $result_mode 		= 'object';
	protected $before_create 	= array("create_timestamps");
	
	function create_timestamps($chat){
		$chat->create_at = date('Y-m-d H:i:s');
		return $chat;
	}
}
?>