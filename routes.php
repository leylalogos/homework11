<?php

use Pecee\SimpleRouter\SimpleRouter;

include "./Controller/UserDashboardController.php";
include "./Controller/UserManagmentController.php";
require_once "./Controller/AuthenticationController.php";
include "./Controller/HomePageController.php";
include_once "./Controller/UploadController.php";
include_once "./Controller/FileApprovalController.php";
include_once "./Controller/SettingController.php";
SimpleRouter::get("authentication/register/", [AuthenticationController::class, 'register']);
SimpleRouter::post("authentication/register", [AuthenticationController::class, 'addUser']);
SimpleRouter::get("authentication/login", [AuthenticationController::class, 'showLoginForm']);
SimpleRouter::post("authentication/login", [AuthenticationController::class, 'doLogin']);
SimpleRouter::get("authentication/logout", [AuthenticationController::class, 'logout']);

SimpleRouter::get("userdashboard/showdashboard", [UserDashboardController::class, 'showDashboard']);

SimpleRouter::get("homepage/showhome", [HomePageController::class, 'showHome']);

SimpleRouter::get("usermanagement/list", [UserManagmentController::class, 'list']);
SimpleRouter::post("usermanagement/changeStatus", [UserManagmentController::class, 'changeStatus']);
SimpleRouter::post("usermanagement/changeRole", [UserManagmentController::class, 'changeRole']);

SimpleRouter::get("upload/showuploadform", [UploadController::class, 'showuploadform']);
SimpleRouter::post("upload/uploadfileuser", [UploadController::class, 'uploadFileUser']);
SimpleRouter::get("upload/showUploadGuest", [UploadController::class, 'showuploadguest']);
SimpleRouter::post("upload/uploadfilguest", [UploadController::class, 'uploadfileguest']);

SimpleRouter::get("approve/showfiles", [FileApprovalController::class, 'showfiles']);
SimpleRouter::post("approve/approvefile", [FileApprovalController::class, 'approveFile']);
SimpleRouter::post("delete/deletefile", [FileApprovalController::class, 'deleteFile']);

SimpleRouter::get("setting/showsetting", [SettingController::class, 'showSetting']);
SimpleRouter::post("setting/setsetting", [SettingController::class, 'setSetting']);
SimpleRouter::post("setting/updateSettings", [SettingController::class, 'updateSettings']);

