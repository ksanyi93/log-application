<?php

require_once 'Classes\Human.php';

class Student extends Human {

    protected string $department;
    protected array $grades;

    public function __construct($name, $gender, $dateOfBirth, $department, $grades = [])
    {
        parent::__construct($name, $gender, $dateOfBirth);
        $this->department = $department;
        $this->grades = $grades;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getGrades() {
        return $this->grades;
    }

    public function getAverageGrade()
    {
        if (count($this->grades) == 0) {
            return 0;
        }

        return array_sum($this->grades) / count($this->grades);
    }

    public function getStudentInfo()
    {
        echo 'Name: ' . $this->getName() . '<br>';
        echo 'Gender: ' . $this->getGender() . '<br>';
        echo 'Date of Birth: ' . $this->getDateOfBirth() . '<br>';
        echo 'Department: ' . $this->getDepartment() . '<br>';
        echo 'Grades: ' . implode(', ', $this->getGrades()) . '<br>';
        echo 'Average Grade: ' . $this->getAverageGrade() . '<br><br>';
    }
    
}