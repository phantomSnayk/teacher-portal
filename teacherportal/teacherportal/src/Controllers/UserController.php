<?php
// UserController.php

require_once '../src/Controllers/StudentController.php';
class UserController
{
    // ... other methods

    public function dashboard()
    {
        $studentController = new StudentController();
        $students = $studentController->index();

        // Database connection detail

        // ... (render the dashboard view with the student list)
    }

    public function login()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = `mysql` . `teachers`;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        } 

        // Handle login form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate user credentials against the database

            // Prepare and execute the SQL query
            $sql = 'SELECT * FROM `mysql`.`teachers` WHERE username = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $hashedPassword = $row['password'];

                // Verify the password using password_verify()
                if (password_verify($password, $hashedPassword)) {
                    // Successful login, start a session
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['logged_in'] = true; // Store user ID in session
                    header('Location: ../public/dashboard.php'); // Redirect to dashboard
                    // include '../public/dashboard.php';
                    exit();
                } else {
                    // Incorrect password
                    echo 'Invalid username or password';
                }
            } else {
                // User not found
                echo 'Invalid username or password';
            }

        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: login.html');
        exit();
    }

    public function getStudents()
    {
        $studentController = new StudentController();
        $students = $studentController->index();

        // ... (render the dashboard view with the student list)
    }
}
