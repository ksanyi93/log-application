<?php

namespace App;

abstract class Human {
    
    protected string $name;
    protected string $gender;
    protected string $dateOfBirth;

    public function __construct($name, $gender, $dateOfBirth)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function __call($methodName, $arguments) {
        return "A függvény '$methodName' nem létezik ebben az osztályban: " . get_class($this) . ", arg: '$arguments'<br><br>";
    }
    
}