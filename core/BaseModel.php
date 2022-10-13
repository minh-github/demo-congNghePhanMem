<?php
class BaseModel extends BaseDatabase {
    protected $db;
    public function __construct() {
        $this->db = new BaseDatabase();
    }
}