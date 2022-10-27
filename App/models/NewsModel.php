<?php

class NewsModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($n){
        $from = ($n-1)*12;
        $lim = 12;
        $sql = "SELECT news.*, admin.* From news INNER JOIN admin ON news.ad_id = admin.ad_id LIMIT $from,$lim";
        return $this->db->query($sql);
    }

    public function getLenght(){

        $sql = "SELECT * From news";
        return $this->db->query($sql);
    }

    public function detail($n_id)
    {
        $sql = "SELECT news.*, admin.*  FROM news INNER JOIN admin ON news.ad_id = admin.ad_id WHERE news.n_id = $n_id";
        return $this->db->query($sql);
    }
}