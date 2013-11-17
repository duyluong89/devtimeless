<?php
class render {
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	function generate_password($password){
		return md5(md5($password));
	}
	
	function compare_password($password, $desPassword){
		$password = $this->generate_password($password);
		if(strcmp($password, $desPassword)==0) return TRUE;
		return FALSE;
	}
	
	function sys_logined($return_obj = FALSE){
		$user = $this->_ci->session->userdata("sysUser");
		if($user){
			if($return_obj)
				return $user;
			return TRUE;
		}
		return FALSE;
	}
	
	function sys_login($user){
		$data = array("sysUser"=>$user);
		$this->_ci->session->set_userdata($data);
	}
	
	function sys_destroy_login(){
		$this->_ci->session->unset_userdata("sysUser");
		$this->_ci->session->sess_destroy();
	}
	
	function sys_remember_logined($remember = FALSE,$user = null){
		
		if($remember){
			$cookie = array(
					'name'   => 'sysUser',
					'value'  => $user,
					'expire' => time() + 30 * 24 * 60 * 3600,
					'secure' => TRUE
			);
			$this->_ci->input->set_cookie($cookie);
		}
	}
	
	function sys_cookied($return_obj = false){
		$user = $this->_ci->input->cookie('sysUser');
		if($user){
			if($return_obj) return $user;
			else return TRUE;
		}
		return FALSE;
	}
}