<?php

class RegisterModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($data)
    {
        $table = 'tbl_qlkh';
        $res = $this->db->insert($table,$data);
    }
}