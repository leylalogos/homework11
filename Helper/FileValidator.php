<?php
include './Model/setting.php';

function extentionValidatation($extension)
{
    $pattern = '/^((pdf|jpeg|png|gif|txt|xml|php),?)+$/i';
    if (!preg_match($pattern, $extension)) {
        throw new Exception('پسوند فایل باید شامل این موارد باشد(php,xml,png,pdf,jpeg,gif)');
    }
}
function userExtentionValidatation($extention)
{
    $setting = new setting();
    $validString =  $setting->getSettings()['extention'];
    $validArray =  explode(',', $validString);

    if (!in_array($extention, $validArray)) {
        throw new Exception("پسوند فایل باید شامل این موارد باشد($validString)");
    }
}
function maxuploadValidation($size)
{
    $setting = new setting();
    $validSize =  $setting->getSettings()['maxupload'];
    if ($size > $validSize) {
        throw new Exception(" سایز فایل بیشتر است ($validSize)");
    }
}
