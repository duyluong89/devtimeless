<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 10:17 AM
 * To change this template use File | Settings | File Templates.
 */
class Login extends Tracker_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if($this->input->post()){

            return;
        }
        $view = $this->load->view('login/view',array(),true);
        $this->content($view);
        $this->view =  "layouts/1column";
        $this->layout = "layouts/index";
    }
}