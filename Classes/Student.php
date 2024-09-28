<?php

namespace App;

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

    public function __toString(): string
    {
        return 'Name: ' . $this->getName() . "\n" .
                'Gender: ' . $this->getGender() . "\n" .
                'Date of Birth: ' . $this->getDateOfBirth() . "\n" .
                'Department: ' . $this->getDepartment() . "\n" .
                'Grades: ' . implode(', ', $this->getGrades()) . "\n\n";
    }
    
}