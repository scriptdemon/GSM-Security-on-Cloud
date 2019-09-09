<?php
session_start();

if(isset($_POST['RES']))
{
	if ($_SESSION['SRES_string'] == $_POST['RES'])
		echo "success";
	else
		echo "failure";
}
?>