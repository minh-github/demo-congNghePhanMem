<?php

class LoginModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($data)
    {
        $table = 'users';
        return $this->db->checkLogin($table,$data);
    }
}