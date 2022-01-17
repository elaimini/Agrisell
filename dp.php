<?php  

 $server = "";
 $username = "epiz_30817574";
 $password = "QdQdCl5exlc3B";
 $dbname = "epiz_30817574_chaboo";

 $conn = mysql_connect($server, $username, $password, $dbname);

 if (!$conn) {
 	die("Connection failed".mysqli_conect_error*());
 }




?>