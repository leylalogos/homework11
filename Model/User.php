<?php
include "./Helper/ConnectToDatabase.php";

class User
{

	public function getUser($id)
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * FROM useres where id=$id";
		$result = mysqli_query($connection, $sql);
		$row = $result->fetch_assoc();
		return $row;
	}
}