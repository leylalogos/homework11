<?php

class UserManagmentController
{
	public function list()
	{
		$user = new User();
		$users = $user->getUsers();

		include_once "./View/userManagement.php";
	}

	public function changeStatus()
	{
		$status = new User();
		$status->changeUserStatus($_POST['id']);
		header("Location: /usermanagement/list");
	}
}