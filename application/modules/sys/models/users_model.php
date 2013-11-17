<?php
class users_model extends MY_Model{
	protected $table = 'users';
	protected $fields = array("id","name","email","pass","avatar","create_at","update_at","status");
	protected $result_mode = 'object';
	protected $before_create = array("create_timestamps");
	protected $before_update = array("update_timestamps");
	
	function create_timestamps($users){
		$users->create_at = date('Y-m-d H:i:s');
	}
	function update_timestamps($users){
		$users->update_at = date('Y-m-d H:i:s');
	}
	
	
}