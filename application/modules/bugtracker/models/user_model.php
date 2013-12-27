<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/27/13
 * Time: 2:56 PM
 * To change this template use File | Settings | File Templates.
 */
class user_model extends MY_Model
{
    protected $table = 'bugtracker_users';
    protected $fields = array("id", "username", "password", "fullname", "email", "phoneNumber", "create_at", "status");
    protected $result_mode = 'object';
    protected $before_create = array("create_timestamps");

    function create_timestamps($bugtracker_users)
    {
        $bugtracker_users->create_at = date('Y-m-d H:i:s');
        return $bugtracker_users;
    }

    function login($username, $password)
    {
        $array_where = array(
            "username" => $username,
            "password" => $password,
            "status" => 1
        );
        $this->db->where($array_where);
        $result = $this->db->get($this->table)->result_object();
        if (is_array($result) && count($result) > 0) return $result[0];
        return false;
    }
}

?>