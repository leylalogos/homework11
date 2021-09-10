<?php
use Pecee\SimpleRouter\SimpleRouter;
require_once "./Controller/AuthenticationController.php";
SimpleRouter::get("/register", [AuthenticationController::class, 'register']);
SimpleRouter::post("/register", [AuthenticationController::class, 'addUser']);