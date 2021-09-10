<?php
include_once "./Helper/ConnectToDatabase.php";

class File
{

	public function getFiles($id)
	{
		$connection = ConnectToDatabase();
		$sql = "SELECT * FROM files where user_id=$id";
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
}