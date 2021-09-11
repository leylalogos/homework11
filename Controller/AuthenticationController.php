<?php
include_once "./Model/Authentication.php";

class AuthenticationController
{
	//show register form to user
	public function register()
	{
		include_once "./View/Register.php";
	}

	//insert user into db
	public function addUser()
	{
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
		include_once "./View/Login.php";

	}

	public function doLogin()
	{
		$login = new Authentication();
		if ($login->login($_POST['username'], $_POST['password'])) {
			header("Location: /homepage/showhome");

		} else {

		}
	}
}
