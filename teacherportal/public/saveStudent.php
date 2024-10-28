<?php
require_once '../src/Controllers/StudentController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stdName = $_POST['stdName'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

$studentController = new StudentController();
$studentController->create();

if (isset($_SESSION['logged_in'])) {
    // User is already logged in, redirect to dashboard
    header('Location: dashboard.php');
    exit;
}


}

