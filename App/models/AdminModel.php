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

    public function deleteAdmin($data)
    {
        $sql = "DELETE FROM admin WHERE admin.ad_id = $data;
        DELETE FROM news WHERE news.ad_id = $data;
        DELETE FROM house WHERE house.ad_id = $data;
        DELETE FROM apartment WHERE apartment.ad_id = $data;
        ";
        return $this->db->query($sql);
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
        $sql = "SELECT * From house INNER JOIN admin ON house.ad_id = admin.ad_id";
        return $this->db->query($sql);
    }

    public function getHouseWaitList()
    {    
        $sql = "SELECT* From house INNER JOIN admin ON house.ad_id = admin.ad_id WHERE house.active = '0'";
        return $this->db->query($sql);
    }

    public function getApartWaitList()
    {    
        $sql = "SELECT* From apartment INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE apartment.active = '0'";
        return $this->db->query($sql);
    }
    
    public function getAllByUser($id,$table)
    {    
        $sql = "SELECT * From $table INNER JOIN admin ON $table.ad_id = admin.ad_id WHERE $table.ad_id = $id";
        return $this->db->query($sql);
    }

    public function insertProduct($data)
    {    
        $table = 'house';
        return $this->db->insert($table,$data);
    }

    public function updateNews($data,$condition)
    {    
        $table = 'news';
        $cond = 'n_id = '.$condition;
        return $this->db->update($table,$data,$cond);
    }

    public function updateProduct($data,$condition)
    {    
        $table = 'house';
        $cond = 'h_id = '.$condition;
        return $this->db->update($table,$data,$cond);
    }

    public function updateAccount($data,$condition)
    {    
        $table = 'admin';
        $cond = 'ad_id = '.$condition;
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

    public function delNews($n_id)
    {    
        $sql = "DELETE FROM news WHERE news.n_id = ".$n_id;
        return $this->db->query($sql);
    }
    
    public function create($data)
    {
        $table = 'admin';
        $res = $this->db->insert($table,$data);
    }

    public function check($data)
    {
        $sql = "SELECT * From admin WHERE admin.ad_username = '$data'";
        return $this->db->query($sql);
    }

    public function accept($data,$table,$id)
    {
        $sql = "UPDATE $table SET `active` = '1' WHERE $table.$id = $data;";
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

    public function getListApart()
    {
        $sql = "SELECT * From apartment INNER JOIN admin ON apartment.ad_id = admin.ad_id";
        return $this->db->query($sql);
    }

    public function getApart($a_id)
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

    public function getRoom($r_id)
    {
        $sql = "SELECT room.*,floor.*,apartment.*,admin.* FROM room INNER JOIN floor ON room.f_id = floor.f_id INNER JOIN apartment ON floor.a_id = apartment.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id WHERE room.r_id =".$r_id;
        return $this->db->query($sql);
    }

    public function insertApart($data)
    {    
        $table = 'apartment';
        return $this->db->insert($table,$data);
    }

    public function insertFloor($a_id, $floor)
    {    
        $sql = "INSERT INTO floor(isfloor, a_id) VALUES ('$floor','$a_id')";
        return $this->db->query($sql);
    }

    public function insertRoom($data)
    {    
        $table = 'room';
        return $this->db->insert($table,$data);
    }

    public function getIdApart($title, $ad_id)
    {
        $sql = "SELECT apartment.a_id FROM apartment WHERE (apartment.title,apartment.ad_id) = ('$title','$ad_id')";
        return $this->db->query($sql);
    }

    public function updateApart($data,$condition)
    {    
        $table = 'apartment';
        $cond = 'a_id = '.$condition;
        return $this->db->update($table,$data,$cond);
    }

    public function getDataApart($data)
    {    
        $table = 'apartment';
        return $this->db->search($table,$data);
    }

    public function delApart($a_id)
    {    
        $sql = "DELETE FROM apartment WHERE apartment.a_id = ".$a_id;
        return $this->db->query($sql);
    }

    public function getIdFloor($a_id, $is_floor)
    {
        $sql = "SELECT floor.f_id FROM floor WHERE(floor.a_id,floor.isfloor) = ('$a_id','$is_floor')";
        return $this->db->query($sql);
    }
}
//get tất cả các phòng trong 1 tầng SELECT apartment.*, floor.*, admin.*, room.*  FROM apartment INNER JOIN floor ON apartment.a_id = floor.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id INNER JOIN room ON floor.f_id = room.f_id WHERE floor.f_id
 //get tất cả các phòng trong 1 Chung cư SELECT apartment.*, floor.*, admin.*, room.*  FROM apartment INNER JOIN floor ON apartment.a_id = floor.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id INNER JOIN room ON floor.f_id = room.f_id
 //get tất cả các tầng trong 1 Chung cư SELECT apartment.*, floor.*, admin.*  FROM apartment INNER JOIN floor ON apartment.a_id = floor.a_id INNER JOIN admin ON apartment.ad_id = admin.ad_id