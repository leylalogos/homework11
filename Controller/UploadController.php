<?php
include './Helper/FileValidator.php';
include_once "./Model/File.php";

class UploadController
{
	public function showUploadForm()
	{
		if (!isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			return;
		}
		include_once "./View/uploadByUser.php";
	}

	public function uploadFileUser()
	{
		if (!isset($_SESSION['user_id'])) {
			header('Location: /homepage/showhome');
			return;
		}
		try {
			$extention = pathinfo($_FILES["file_user"]["name"])['extension'];
			userExtentionValidatation($extention);
			maxuploadValidation($_FILES["file_user"]["size"]);
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
			header('Location: /upload/showuploadform');
		}
		//insert data into database
		$file = new File();
		var_dump($_FILES['file_user']);
		$file->create($_FILES['file_user']['name'], $_FILES['file_user']['size'], $extention, $_SESSION['user_id']);
		move_uploaded_file($_FILES["file_user"]["tmp_name"], './uploads/' . $_FILES["file_user"]['name']);
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
