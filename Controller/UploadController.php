<?php

class UploadController
{
	public function showUploadForm()
	{
		if ( !isset($_SESSION['user_id']) ) {
			header('Location: /homepage/showhome');
			return;
		}
		include_once "./View/uploadByUser.php";
	}

	public function uploadFileUser()
	{
		if ( !isset($_SESSION['user_id']) ) {
			header('Location: /homepage/showhome');
			return;
		}

	}

//upload by quest
	public function showUploadGuest()
	{
		include_once "./View/uploadByGuest.php";
	}

	public function UploadFileGuest()
	{

	}
}