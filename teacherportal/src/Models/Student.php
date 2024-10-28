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


    public static function getAllStudents()
    {
        $db = new Database();
        $sql = 'SELECT * FROM `mysql`.`students_details`';
        $result = $db->query($sql);
        $students = [];


        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

               $students[] = $row;
            }
        }

        

         $students = json_encode($students);

         echo $students;

    }

}
