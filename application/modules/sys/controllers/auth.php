<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends SYS_Controller{
	protected $models = array("users");
	function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		if($this->render->sys_logined() && $this->_method == "login") redirect(create_url("sys/dashboard"));
	}

	function login(){
		if($this->input->post()){
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|');
			if ($this->form_validation->run() === TRUE)
			{
				$data = $this->input->post();
				$login = strtolower($data['email']);
				$password = $data['password'];
				if($this->input->post('rememberme'))
					$remember = true;
				else $remember = false;
				$user = $this->users->get("email",$login);
				
				if($user){
					if($this->render->compare_password($password,$user->pass)){
						$this->render->sys_login($user);
						redirect('sys/dashboard');
					}else{
						$this->data['msg'] = "Password wrong, please check again";
					}
					
				}else{
					$this->data['msg'] = "Does not exists user";
					
				}
				
				
			}
		}
		
		$this->view = "auth/login";
		$this->layout = 'layouts/auth';
	}
	
	function logout(){
		$this->render->sys_destroy_login();
		redirect("sys");
	}
	
	
}

?>