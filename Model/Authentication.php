<?php
include_once "./Helper/ConnectToDatabase.php";

class Authentication
{
	function createUser($username, $mobile, $email, $password)
	{
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		$connection = ConnectToDatabase();
		$sql = "INSERT INTO useres(username,mobile,email,password,credit,is_active)VALUES ('$username','$mobile','$email','$passwordHash',0,1)";

		if ($connection->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error!" . $connection->error;
		}
	}

	function login($username, $password) : bool{
		$connection = ConnectToDatabase();
		$sql = "SELECT * From useres WHERE username ='$username'  ";
		$result = mysqli_query($connection,$sql);
		 if($result->num_rows == 0){
			 return false;
		 }
		 //var_dump();
		$row = $result->fetch_all()[0];
		 if( password_verify($password, $row[4])){
			$_SESSION['user_id'] = $row[0];
			return true;
		}
		return false;
	}
}