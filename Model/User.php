<?php
include "./Helper/ConnectToDatabase.php";

class User
{

	//return one user by id
	public function getUser($id)
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * FROM useres where id=$id";
		$result = mysqli_query($connection, $sql);
		$row = $result->fetch_assoc();
		return $row;
	}

	//return all user for admin
	public function getUsers()
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * FROM useres ";
		$result = mysqli_query($connection, $sql);
		$row = $result->fetch_all(MYSQLI_ASSOC);
		return $row;
	}

	public function changeUserStatus($id)
	{
		$connection = ConnectToDatabase();
		$sql = "UPDATE useres set is_active=!is_active where id=$id";
		$result = mysqli_query($connection, $sql);
	}

	public function changeUserRole($id, $role){
		$connection = ConnectToDatabase();
		$sql = "UPDATE useres set role='$role' where id=$id";
		$result = mysqli_query($connection, $sql);


	}
}