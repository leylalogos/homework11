<?php
class fileApprovalController
{



    public function showFiles()
    {
        if (!($_SESSION['role'] == 'approval' || $_SESSION['role'] == 'admin')) {
            header('Location: /homepage/showhome');
            return;
        }
        $file = new File();
        $all = $file->getAllFiles();
        include "./View/fileApproval.php";
    }
    public function approveFile()
    {
        if (!($_SESSION['role'] == 'approval' || $_SESSION['role'] == 'admin')) {
            header('Location: /homepage/showhome');
            return;
        }
        $approvefile = new File();
        $approvefile->approveFile($_POST['id']);
        header("Location: /approve/showfiles");
    }
    public function deleteFile()
    {
        if (!($_SESSION['role'] == 'approval' || $_SESSION['role'] == 'admin')) {
            header('Location: /homepage/showhome');
            return;
        }
        $deletefile = new File();
        $deletefile->deletefile($_POST['id']);
        header("Location: /approve/showfiles");
    }
}
