<?php

session_start();
//$ip = 'mysql:unix_socket=/cloudsql/flawless-acre-308717:asia-south1:cnervis';
$ip = '34.93.103.172';
//$ip = '127.0.0.1';
$dbname ='dbo';
$username = 'root';
$password = 'oa8wAiMw6BFtwd09';

$con = mysqli_connect($ip,$username,$password);



if ($con){
	echo "connected";
	
	 
}
else{
	echo "not connected";
}
?>
