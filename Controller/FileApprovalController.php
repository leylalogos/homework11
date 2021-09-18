<?php
class fileApprovalController
{
    public function showFiles()
    {
        $file = new File();
        $all = $file->getAllFiles();
        include "./View/fileApproval.php";
    }
    public function approveFile()
    {
        $approvefile = new File();
        $approvefile->approveFile($_POST['id']);
        header("Location: /approve/showfiles");
    }
    public function deleteFile()
    {
        $deletefile = new File();
        $deletefile->deletefile($_POST['id']);
        header("Location: /approve/showfiles");
    }
}
