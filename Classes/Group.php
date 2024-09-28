<?php

namespace App;

class Group extends Human {
    
    protected object $leader;
    protected array $students;

    public function __construct(Teacher $leader, $students) {
        $this->leader = $leader;
        $this->students = $students;
    }

    public function getLeader() {
        return $this->leader;
    }

    public function getStudents() {
        return $this->students;
    }

    public function __toString(): string
    {
        $groupInfo = "Group Leader: " . $this->leader->getName() . " (" . $this->leader->getMaritalStatus() . ")<br>";
        $groupInfo .= "Students:<br>";

        foreach ($this->students as $student) {
            $groupInfo .= "- " . $student->getName() . " (" . $student->getDepartment() . ")<br>";
        }

        $groupInfo .= "<br>";
        return $groupInfo;
    }

    public function getGroupAverage()
    {
        $totalAverage = 0;
        $studentCount = count($this->students);

        foreach ($this->students as $student) {
            $totalAverage += $student->getAverageGrade();
        }

        if ($studentCount > 0) {
            return $totalAverage / $studentCount;
        } else {
            return 0;
        }
    }

}