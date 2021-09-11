<?php
use Pecee\SimpleRouter\SimpleRouter;
include "./Controller/UserDashboardController.php";
include "./Controller/UserManagmentController.php";
require_once "./Controller/AuthenticationController.php";
include "./Controller/HomePageController.php";
SimpleRouter::get("authentication/register/", [AuthenticationController::class, 'register']);
SimpleRouter::post("authentication/register", [AuthenticationController::class, 'addUser']);
SimpleRouter::get("authentication/login", [AuthenticationController::class, 'showLoginForm']);
SimpleRouter::post("authentication/login", [AuthenticationController::class, 'doLogin']);
SimpleRouter::get("userdashboard/showdashboard", [UserDashboardController::class, 'showDashboard']);
SimpleRouter::get("homepage/showhome", [HomePageController::class, 'showHome']);
SimpleRouter::get("usermanagement/list", [UserManagmentController::class, 'list']);
SimpleRouter::post("usermanagement/changeStatus", [UserManagmentController::class, 'changeStatus']);

