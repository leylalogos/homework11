<?php

function ConnectToDatabase()
{
	$hostName = "localhost";
	$user = "root";
	$pass = "lililogos";
	$dbname = "Upload";
	$con = new mysqli($hostName, $user, $pass, $dbname);
	if ($con->connect_error == true) {
		echo "connection error";

	}
	return $con;
}