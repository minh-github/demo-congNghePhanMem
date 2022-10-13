<?php

class LoginModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($data)
    {
        $table = 'tbl_qlkh';
        return $this->db->checkLogin($table,$data);
    }
}