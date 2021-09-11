<?php
include_once "./Helper/ConnectToDatabase.php";

class Authentication
{
	function createUser($username, $mobile, $email, $password)
	{
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		$connection = ConnectToDatabase();
		$sql = "INSERT INTO useres(username,mobile,email,password,credit,is_active,role)VALUES ('$username','$mobile','$email','$passwordHash',0,1,'normal')";

		if ($connection->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error!" . $connection->error;
		}
	}

	function login($username, $password): bool
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * From useres WHERE username ='$username' and is_active=1";
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows == 0) {
			return false;
		}
		//var_dump();
		$row = $result->fetch_assoc();
		if (password_verify($password, $row['password'])) {
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
			return true;
		}
		return false;
	}

}