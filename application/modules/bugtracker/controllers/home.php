<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 10:11 AM
 * To change this template use File | Settings | File Templates.
 */
class Home extends Tracker_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->content("da");
        $this->view = "layouts/1column";
        $this->layout = "layouts/index";
    }
}