<?php

class UploadController
{
	public function showUploadForm()
	{
		include_once "./View/uploadByUser.php";
	}

	public function uploadFileUser()
	{

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