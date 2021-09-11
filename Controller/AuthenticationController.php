<?php
include_once "./Model/Authentication.php";

class AuthenticationController
{
	//show register form to user
	public function register()
	{
		if (isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			die();
		}
		include_once "./View/Register.php";
	}

	//insert user into db
	public function addUser()
	{
		if (isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			die();
		}
		unset($_SESSION['validation_error']);

		include_once "./Helper/AuthenticationValidator.php";
		try {
			emailValidate($_POST['email']);
			mobilelValidate($_POST['mobile']);
			passwordValidate($_POST['password']);
		} catch (Exception $exception) {
			$_SESSION['validation_error'] = $exception->getMessage();
			header('Location: authentication/register');
		}
		$user = new Authentication();
		$user->createUser($_POST['username'], $_POST['mobile'], $_POST['email'], $_POST['password']);
		header("Location: /authentication/login");

	}

	public function showLoginForm()
	{
		if (isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			die();
		}
		include_once "./View/Login.php";
	}

	public function doLogin()
	{
		if (isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			die();
		}
		$login = new Authentication();
		if ($login->login($_POST['username'], $_POST['password'])) {
			header("Location: /homepage/showhome");

		} else {
			header("Location: /authentication/login");
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location: /authentication/login");
	}
}
