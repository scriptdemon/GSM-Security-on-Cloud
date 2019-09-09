<?php

define('DB_HOST',$_SERVER['RDS_HOST_NAME']);
define('DB_NAME',$_SERVER['RDS_DB_NAME']);
define('DB_USER',$_SERVER['RDS_USER']);
define('DB_PASSWORD',$_SERVER['RDS_PASSWORD']);

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>