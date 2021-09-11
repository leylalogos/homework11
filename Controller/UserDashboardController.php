<?php
include_once "./Model/User.php";
include_once "./Model/File.php";

class UserDashboardController
{
	public function showDashboard()
	{
		if (!isset($_SESSION['user_id'])) {
			header('Location: /authentication/login');
			return;
		}
		$user = new User();
		$userData = $user->getUser($_SESSION['user_id']);

		$file = new File();
		$userFiles = $file->getUserFilesInformation($_SESSION['user_id']);
		include "./View/UserDashboard.php";
	}


}
