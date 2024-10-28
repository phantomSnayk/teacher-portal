<?php

require_once '../src/Database/db.php';
class Student
{
    private $id;
    private $name;
    private $subject;
    private $marks;

    public function __construct($id, $name, $subject, $marks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->subject = $subject;
        $this->marks = $marks;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    // ... other getters and setters

    public static function getAllStudents()
    {
        $db = new Database();
        $sql = 'SELECT * FROM `mysql`.`students_details`';
        $result = $db->query($sql);
        $students = [];
        // while ($row = $result->fetch_assoc()) {
        //     $students[] = new Student($row['id'], $row['name'], $row['subject'], $row['marks']);
        // }

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               // echo "<tr><td>" . $row["name"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["marks"] . "</td></tr>";
               $students[] = $row;
            }
        }

        

         $students = json_encode($students);

         echo $students;
        // return $students;
    }

    // ... other methods for updating and deleting students
}
