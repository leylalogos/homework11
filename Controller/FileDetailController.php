<?php
include_once "./Model/File.php";
class FileDetailController
{
    public function showDetails()
    {
        $file = new File();
        $allfiles = $file->getUserFiles($_SESSION['user_id']);
        include "./View/filedetailes.php";
    }
}
