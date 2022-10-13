<?php
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Minh1234@";
 $db = "congNghePhanMem";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
}   