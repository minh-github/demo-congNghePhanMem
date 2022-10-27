<?php
function OpenCon(){
 $dbhost = "us-cdbr-east-06.cleardb.net";
 $dbuser = "b7f872637ba446";
 $dbpass = "9b7e3b93";
 $db = "heroku_f4ca8fd8cf20c20";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

//  mysql://b7f872637ba446:9b7e3b93@us-cdbr-east-06.cleardb.net/heroku_f4ca8fd8cf20c20?reconnect=true

 return $conn;
}   