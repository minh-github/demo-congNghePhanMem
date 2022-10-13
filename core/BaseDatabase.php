<?php
class BaseDatabase{
    private $__conn;
    function __construct() {
        require 'BaseConnection.php';
        $this->__conn = OpenCon();
        $this->__conn->set_charset("utf8");
    }

    public function insert($table,$data)
    {
        if (!empty($data)) {
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key => $val) {
                $fieldStr.= $key.',';
                $valueStr.="'".$val."',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table ($fieldStr) VALUES ($valueStr)"; 
            $status = mysqli_query($this->__conn, $sql);

            if ($status) {
                return true;
            }
        }
        return false;
    }

    public function upadate($table,$data,$condition)
    {
        if (!empty($data)) { 
            $updateStr = '';
            foreach ($data as $key => $val) {
                $updateStr.=" $key='$val',";
        }
        $updateStr = rtrim($updateStr, ',');
        if (!empty($condition)) {
            $sql = "UPDATE $table SET $updateStr WHERE $condition";
        }else{
            $sql = "UPDATE $table SET $updateStr";
        }
        $status = mysqli_query($this->__conn, $sql);
        
        if ($status) {
            return true;
        }
        return false;}
    }

    public function delete($table,$condition='')
    {
        if (!empty($condition)) {
            $sql = "DELETE FROM $table WHERE $condition";
        }else{
            $sql = "DELETE FROM ".$table;
        }

        $status = mysqli_query($this->__conn, $sql);
        if ($status) {
            return true;
        }
        return false;
    }
    public function getAll($table)
    {
        $sql = "SELECT * From $table";
        $data = $this->__conn->query($sql);
        return $data;
    }

    public function checkLogin($table,$data)
    {
        if (!empty($data)) {
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key => $val) {
                $fieldStr.= $key.',';
                $valueStr.="'".$val."',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "SELECT * FROM $table WHERE ($fieldStr) = ($valueStr)"; 

            $status = mysqli_query($this->__conn, $sql);

            if ($status->num_rows > 0) {
                return true;
            }
            return false;
        }
        return false;
    }
}