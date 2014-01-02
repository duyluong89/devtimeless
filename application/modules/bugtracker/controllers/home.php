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
            'block_content' => $this->getAssignToMe(),
            'block_class' => 'assign_to_me marginRight10'
        );
        $my_watched = array(
            'block_title' => $this->lang->line('lbl_my_watched'),
            'block_content' => $this->getMyWatched(),
            'block_class' => 'my_watched'
        );
        $last_comment = array(
            'block_title' => $this->lang->line('lbl_last_comment'),
            'block_content' => $this->getLastComment(),
            'block_class' => 'last_comment marginRight10'
        );
        $array_home = array(
            'homeData' => array(
                'assign_to_me'  => $this->block_views($assign_to_me),
                'my_watched'    => $this->block_views($my_watched),
                'last_comment'  => $this->block_views($last_comment),
            )
        );
        $this->content($this->load->view('home/index', $array_home, TRUE));
        $this->view = "layouts/1column";
        $this->layout = "layouts/index";
    }

    function getAssignToMe(){
        return "Assign to me";
    }

    function getMyWatched(){
        return "My watched";
    }

    function getLastComment(){
        return "Last Comment";
    }
}