<?php
require_once "./Model/setting.php";

class SettingController
{

    public function showSetting()
    {
        $edit = new setting();
        $row = $edit->getSettings();
        include "./View/settingForm.php";
    }

    public function setSetting()
    {

        include_once "./Helper/FileValidator.php";
        try {
            extentionValidatation($_POST['extention']);
        } catch (Exception $exception) {
            echo  $exception->getMessage();
        }
        $dosetting = new Setting();
        $dosetting->setSetting($_POST['extention'], $_POST['maxupload'], $_POST['keepingtime']);
        header("Location: /setting/showsetting");
    }
    public function updateSettings()
    {
        $update = new setting();
        $update->updateSettings();
    }
}
