<?php
include_once "./Helper/ConnectToDatabase.php";

class File
{

	// thia method returns files for a user
	public function getAllFiles()
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * FROM files ";
		$result = mysqli_query($connection, $sql);
		$row = $result->fetch_all(MYSQLI_ASSOC);
		return $row;
	}

	public function getUserFilesInformation($user_id)
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT SUM(download_count) AS download_sum,SUM(size) AS size_sum FROM `files` WHERE user_id=$user_id";
		$result = mysqli_query($connection, $sql);
		$row = $result->fetch_assoc();
		return $row;
	}
	//this method approve file in database by approval user .
	public function approveFile($id)
	{
		$connection = ConnectToDatabase();
		$sql = "UPDATE files SET is_approved=1 WHERE id=$id";
		$result = mysqli_query($connection, $sql);
	}
	//this method delete file in database by approval user .
	public function deleteFile($id)
	{
		$connection = ConnectToDatabase();
		$sql = "DELETE FROM files WHERE id=$id";
		$result = mysqli_query($connection, $sql);
	}
}
