<?php
include_once "./Helper/ConnectToDatabase.php";

class Setting
{
    //insert setting in the database.
    public function setSetting($extention, $maxupload, $keepingtime)
    {
        $connection = ConnectToDatabase();
        $sql = "INSERT INTO setting (extention,maxupload,keepingtime) VALUES('$extention','$maxupload','$keepingtime')";
        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error!" . $connection->error;
        }
    }
    //this method is for edit by admin and fetch data from database and show to admin
    public function getSettings()
    {
        $connection = ConnectToDatabase();
        $sql = "SELECT * FROM setting";
        $result = mysqli_query($connection, $sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateSettings($extention,$maxupload,$keepingTime)
    {
        $connection = ConnectToDatabase();
        $sql = "UPDATE setting SET extention='$extention',maxupload='$maxupload',keepingTime='$keepingTime'";
        $result = mysqli_query($connection, $sql);
    }
}
