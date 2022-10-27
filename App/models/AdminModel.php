<?php

class AdminModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($data)
    {
        $table = 'admin';
        return $this->db->checkLogin($table,$data);
    }

    public function getList(){
        $table = 'house';
        return $this->db->getAll($table);
    }

    public function getListUser(){
        $sql = "SELECT * From admin";
        return $this->db->query($sql);
    }

    public function getAdmin($ad_id){
        $sql = "SELECT * From admin WHERE admin.ad_id = $ad_id";
        return $this->db->query($sql);
    }

    public function getAllWithId()
    {    
        $sql = "SELECT * From house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.active = 1";
        return $this->db->query($sql);
    }

    public function getWaitList()
    {    
        $sql = "SELECT * From house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.active = '0'";
        return $this->db->query($sql);
    }

    public function getAllByUser($id)
    {    
        $sql = "SELECT * From house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.ad_id = $id";
        return $this->db->query($sql);
    }

    public function insertProduct($data)
    {    
        $table = 'house';
        return $this->db->insert($table,$data);
    }

    public function updateProduct($data,$condition)
    {    
        $table = 'house';
        $cond = 'h_id = '.$condition;
        return $this->db->update($table,$data,$cond);
    }

    public function getProduct($data)
    {    
        $table = 'house';
        return $this->db->search($table,$data);
    }

    public function delProduct($h_id)
    {    
        $sql = "DELETE FROM house WHERE house.h_id = ".$h_id;
        return $this->db->query($sql);
    }
    
    public function create($data)
    {
        $table = 'admin';
        $res = $this->db->insert($table,$data);
    }

    public function accept($data)
    {
        $sql = "UPDATE `house` SET `active` = '1' WHERE `house`.`h_id` = $data;";
        return $this->db->query($sql);
    }

    public function uploadImg($file,$path)
    {
        return $this->db->uploadFile($file,$path);
    }

    public function insertNews($data)
    {    
        $table = 'news';
        return $this->db->insert($table,$data);
    }

    public function getListNews(){
        $sql = "SELECT * From news INNER JOIN admin ON news.ad_id = admin.ad_id";
        return $this->db->query($sql);
    }

    public function getNews($n_id)
    {    
        $sql = "SELECT news.*, admin.*  FROM news INNER JOIN admin ON news.ad_id = admin.ad_id WHERE news.n_id = $n_id";
        return $this->db->query($sql);
    }
}