<?php

class ProductModel extends BaseModel{
    public function __construct() {
        parent::__construct();
    }

    public function index($n,$order){
        $from = ($n-1)*12;
        $lim = 12;
        $sql = "SELECT * From house WHERE house.active = '1' $order LIMIT $from,$lim";
        return $this->db->query($sql);
    }

    public function getLenght(){
        $sql = "SELECT * From house WHERE house.active = '1'";
        return $this->db->query($sql);
    }

    public function detail($h_id)
    {
        $sql = "SELECT house.*, admin.*  FROM house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.h_id = $h_id";
        return $this->db->query($sql);
    }

    public function getItem($keyWord)
    {
        $sql = "SELECT house.*, admin.* FROM house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.title LIKE '%$keyWord%' OR house.province LIKE '%$keyWord%' OR house.district LIKE '%$keyWord%'";
        return $this->db->query($sql);
    }

    public function getByTime()
    {
        $sql = "SELECT house.*, admin.* FROM house INNER JOIN admin ON house.ad_id = admin.ad_id ORDER BY house.timePost DESC LIMIT 0,3";
        return $this->db->query($sql);
    }

    public function getNews()
    {
        $sql = "SELECT news.*, admin.* FROM news INNER JOIN admin ON news.ad_id = admin.ad_id ORDER BY news.posttime DESC LIMIT 0,3";
        return $this->db->query($sql);
    }
}