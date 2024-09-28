<?php

namespace App;

class Teacher extends Human {
    
    protected string $maritalStatus;

    public function __construct($name, $gender, $dateOfBirth, $maritalStatus)
    {
        parent::__construct($name, $gender, $dateOfBirth);
        $this->maritalStatus = $maritalStatus;
    }

    public function getMaritalStatus() {
        return $this->maritalStatus;
    }

}