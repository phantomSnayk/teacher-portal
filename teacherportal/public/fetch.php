<?php

require_once '../src/Controllers/UserController.php';


session_start();


if (!isset($_SESSION['logged_in'])) {
    header('Location: login.html');
    exit;
}

$userController = new UserController();
$students = $userController->getStudents();

// ... (Render the dashboard view with the student list)

// if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
//     header("Location: views/login.html");
//     exit;
// } else {
//     echo "HI";
//     // Display dashboard content here
//     header("Location: indexOld.html");
//     exit;
// }
?>