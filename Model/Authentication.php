<?php
include_once "./Helper/ConnectToDatabase.php";

class Authentication
{
	function createUser($username, $mobile, $email, $password)
	{
		$connection = ConnectToDatabase();
		$sql = "INSERT INTO useres(username,mobile,email,password,credit,is_active)VALUES ('$username','$mobile','$email','$password',0,1)";

		if ($connection->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error!" . $connection->error;
		}
	}
}