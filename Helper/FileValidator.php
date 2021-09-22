<?php
function extentionValidatation($extension)
{
    $pattern = '/^((pdf|jpeg|png|gif|txt|xml|php),?)+$/i';
    if (!preg_match($pattern, $extension)) {
        throw new Exception('پسوند فایل باید شامل این موارد باشد(php,xml,png,pdf,jpeg,gif)');
    }
}
