<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 10:17 AM
 * To change this template use File | Settings | File Templates.
 */
class Login extends Tracker_Controller
{
    protected $models = array("user");

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->input->post()) {
            $userName = $this->input->post("username") ? $this->input->post("username") : false;
            $password = $this->input->post("password") ? $this->input->post("password") : false;
            $data = array(
                'error' => 0,
                'message' => ''
            );
            if ($userName && $password) {
                $duser = $this->user->login($userName, $this->encryption->genPassword($password));
                if ($duser) {
                    $data['error'] = 0;
                    $this->session->set_userdata(array('duser'=>$duser));
                } else {
                    $data['error'] = 1;
                    $data['message'] = $this->lang->line('error_invalid_login');
                }

            } else {
                $data['error'] = 1;
                $data['message'] = $this->lang->line('error_invalid_login');
            }
            echo json_encode($data);
            exit();
        }
        $view = $this->load->view('login/view', array(), true);
        $this->content($view);
        $this->view = "layouts/1column";
        $this->layout = "layouts/index";
    }
}