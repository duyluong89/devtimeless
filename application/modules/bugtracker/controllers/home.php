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
        $assign_to_me = array(
            'block_title' => $this->lang->line('lbl_assign_to_me'),
            'block_content' => 'content block',
            'block_class' => 'assign_to_me'
        );
        $my_watched = array(
            'block_title' => $this->lang->line('lbl_assign_to_me'),
            'block_content' => 'content block',
            'block_class' => 'my_watched'
        );
        $array_home = array(
            'homeData' => array(
                'assign_to_me' => $this->block_views($assign_to_me),
                'my_watched' => $this->block_views($my_watched),
            )
        );
        $this->content($this->load->view('home/index', $array_home, TRUE));
        $this->view = "layouts/1column";
        $this->layout = "layouts/index";
    }
}