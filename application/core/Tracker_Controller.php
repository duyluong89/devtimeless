<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 10:09 AM
 * To change this template use File | Settings | File Templates.
 */
class Tracker_Controller extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->language('bugtracker/login', $this->_global_language);
        $this->load->language('bugtracker/global', $this->_global_language);
    }
}