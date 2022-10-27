<?php

class RegisterModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($data)
    {
        $table = 'users';
        $res = $this->db->insert($table,$data);
    }
}