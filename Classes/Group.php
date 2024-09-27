<?php

class Group {
    
    protected $leader;
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

    public function getGroupInfo()
    {
        echo "Group Leader: " . $this->leader->getName() . " (" . $this->leader->getMaritalStatus() . ") <br>";
        echo "Students: <br>";

        foreach ($this->students as $student) {
            echo "- " . $student->getName() . " (" . $student->getDepartment() . ") <br>";
        }

        echo "<br>";
    }

    // csoportban lévő diákok átlagának átlaga
    public function getGroupAverage() {
        $totalAverage = 0;
        $studentCount = count($this->students);

        foreach ($this->students as $student) {
            $totalAverage += $student->getAverageGrade();
        }

        if ($studentCount > 0) {
            return $totalAverage / $studentCount;
        } else {
            return 0; // Ha nincs diák a csoportban, az átlag legyen 0
        }
    }

}