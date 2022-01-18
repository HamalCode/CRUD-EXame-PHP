<?php 
	$server    = "localhost";
	$user      = "root";
	$pass      = "";
	$port      = "3306";
	$db        = "uts";

try{
	$con = new PDO('mysql:server='.$server.'; dbname='.$db.';port='.$port.';',$user,$pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
    	echo "koneksaun ba base de dadus error: " . $e->getMessage();
    	exit();
    }

 ?>