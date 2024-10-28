<?php
require_once '../src/Models/Student.php';
require_once '../src/Controllers/UserController.php';

class StudentController
{
    public function index()
    {
        // Fetch all students from the database
        $students = Student::getAllStudents();

    }

    public function create()
    {
        // Handle the form submission to create a new student
        // ...
        $db = new Database();

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $stdName = $_POST['stdName'];
            $subject = $_POST['subject'];
            $marks = $_POST['marks'];

            // Validate user credentials against the database

            $sql = "INSERT INTO `mysql`.`students_details` (name,subject,marks) VALUES ('$stdName','$subject',$marks) ON DUPLICATE KEY UPDATE marks = $marks;";
            $result = $db->query($sql);



            if ($result) {
                 header('Location: index.php');
                exit();
            } else {
                // Invalid credentials
                echo 'error';
            }
        }
    }

    public function update($id)
    {
        // Update the student with the given ID
        // ...
        $db = new Database();

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $stdName = $_POST['stdName'];
            $subject = $_POST['subject'];
            $marks = $_POST['marks'];
            $id = $_POST['recordId'];

            // Validate user credentials against the database

            $sql = "UPDATE `mysql`.`students_details`
            SET name =  '$stdName', subject =  '$subject', marks = '$marks'
            WHERE id =$id;";
            $result = $db->query($sql);

            if ($result) {
                header('Location: index.php');

                exit();
            } else {
                // Invalid credentials
                echo 'error';
            }
        }
    }

    public function delete($id)
    {
        // Delete the student with the given ID
        // ...
        $db = new Database();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['recordId'];

            // Validate user credentials against the database

            $sql = "DELETE FROM `mysql`.`students_details` WHERE id = $id";
            $result = $db->query($sql);

            if ($result) {
                header('Location: index.php');

                exit();
                // echo "success fully deleted";
            } else {
                // Invalid credentials
                echo 'error';
            }
        }
    }
}
