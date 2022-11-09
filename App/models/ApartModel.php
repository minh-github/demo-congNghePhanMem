<?php
class ApartModel extends BaseModel{
    public function getListApart($n)
    {
        $from = ($n-1)*12;
        $lim = 12;
        $sql = "SELECT * FROM apartment WHERE apartment.active = 1 LIMIT $from,$lim";
        return $this->db->query($sql);
    }

    public function getApart($a_id)
    {    
        $sql = "SELECT apartment.*, admin.* FROM apartment INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE apartment.a_id = $a_id";
        return $this->db->query($sql);
    }

    public function getLenght(){
        $sql = "SELECT * From apartment WHERE apartment.active = '1'";
        return $this->db->query($sql);
    }

    public function detail($a_id)
    {
        $sql = "SELECT apartment.*, admin.* FROM apartment INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE apartment.a_id = $a_id";
        return $this->db->query($sql);
    }

    public function getFloor($a_id)
    {    
        $sql = "SELECT apartment.*, floor.*, admin.*  FROM apartment INNER JOIN floor ON apartment.a_id = floor.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE apartment.a_id = ".$a_id;
        return $this->db->query($sql);
    }

    public function getAllRoom($f_id)
    {   
        $sql = "SELECT room.nameroom,room.status,room.r_id FROM floor INNER JOIN room ON floor.f_id = room.f_id WHERE floor.f_id = ".$f_id;
        return $this->db->query($sql);
    }

    public function getAdmin($ad_id){
        $sql = "SELECT * From admin WHERE admin.ad_id = $ad_id";
        return $this->db->query($sql);
    }

    public function getRoom($r_id)
    {
        $sql = "SELECT room.*,floor.*,apartment.*,admin.* FROM room INNER JOIN floor ON room.f_id = floor.f_id INNER JOIN apartment ON floor.a_id = apartment.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE room.r_id =".$r_id;
        return $this->db->query($sql);
    }

    public function getItem($keyWord)
    {
        $sql = "SELECT apartment.*, admin.* FROM apartment INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE apartment.title LIKE '%$keyWord%' OR apartment.province LIKE '%$keyWord%' OR apartment.district LIKE '%$keyWord%'";
        return $this->db->query($sql);
    }

    public function activeRoom($r_id){
        $sql = "UPDATE room SET room.status = 1 WHERE room.r_id = $r_id";
        return $this->db->query($sql);
    }
}