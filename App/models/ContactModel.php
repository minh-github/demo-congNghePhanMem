<?php
class ContactModel extends BaseModel{
    public function getByLocation()
    {
        if(isset($_POST['province'])){
            $location = $_POST['province'];
        }
        else{$location = "Tỉnh Quảng Ninh";}

        $sql = "SELECT house.*, admin.* FROM house INNER JOIN admin ON house.ad_id = admin.ad_id and house.province = '$location' ORDER BY house.timePost DESC LIMIT 0,3";
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