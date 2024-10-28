<?php
require_once '../src/Controllers/StudentController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stdName = $_POST['stdName'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];
    $id = $_POST['recordId'];

    $studentController = new StudentController();
    $studentController->update($id);
}
