<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/27/13
 * Time: 2:38 PM
 * To change this template use File | Settings | File Templates.
 */
class encryption{
    protected $ci;
    public function __construct(){
        $this->ci = & get_instance();
    }
    public function genPassword($password){
        $pre_password = $this->ci->config->item('pre_password');
        $password = md5($pre_password . md5($password));
        return $password;
    }


}