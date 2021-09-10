<?php
use Pecee\SimpleRouter\SimpleRouter;
include "./Controller/UserDashboardController.php";
require_once "./Controller/AuthenticationController.php";
include "./Controller/HomePageController.php";
SimpleRouter::get("/register", [AuthenticationController::class, 'register']);
SimpleRouter::post("/register", [AuthenticationController::class, 'addUser']);
SimpleRouter::get("/login", [AuthenticationController::class, 'showLoginForm']);
SimpleRouter::post("/login", [AuthenticationController::class, 'doLogin']);
SimpleRouter::get("/dashboard", [UserDashboardController::class, 'showDashboard']);
SimpleRouter::get("/homepage", [HomePageController::class, 'showHome']);
