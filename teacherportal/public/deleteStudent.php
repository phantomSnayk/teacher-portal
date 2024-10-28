<?php
require_once '../src/Controllers/StudentController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['recordId'];

$studentController = new StudentController();
$studentController->delete($id);

}