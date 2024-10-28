<?php

require_once '../src/Controllers/UserController.php';


session_start();


if (!isset($_SESSION['logged_in'])) {
    header('Location: login.html');
    exit;
}

$userController = new UserController();
$students = $userController->getStudents();

?>