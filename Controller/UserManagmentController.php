<?php

class UserManagmentController
{
	public function list()
	{
		if ( !isset($_SESSION['user_id']) || $_SESSION['role']!='admin' ) {
			header('Location: /homepage/showhome');
			return;
		}
		$user = new User();
		$users = $user->getUsers();

		include_once "./View/userManagement.php";
	}

	public function changeStatus()
	{
		if (!isset($_SESSION['user_id']) || $_SESSION['role']!='admin' ) {
			header('Location: /homepage/showhome');
			return;
		}
		$status = new User();
		$status->changeUserStatus($_POST['id']);
		header("Location: /usermanagement/list");
	}

	public function changeRole()
	{
		if (!isset($_SESSION['user_id']) || $_SESSION['role']!='admin' ) {
			header('Location: /homepage/showhome');
			return;
		}
		$role = new User();
		$role->changeUserRole($_POST['id'],$_POST['role']);

		header("Location: /usermanagement/list");
	}

}