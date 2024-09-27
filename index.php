<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Classes\Student.php';
require_once 'Classes\Teacher.php';
require_once 'Classes\Group.php';

// inicializálás
$students = [
    new Student('Kiss Bianka', 'nő', '1980-05-12', 'informatika',   [5, 4, 3, 1]), // 3,25
    new Student('Nagy Ervin', 'férfi', '2001-08-21', 'fizika',      [2, 5, 1, 4, 3]), //3
    new Student('Kovács János', 'férfi', '1975-11-15', 'mérnökség', [3, 2, 4, 5, 5]),
    new Student('Baris Emőke', 'nő', '1999-07-10', 'mérnökség',     [1, 1, 5, 3]),
    new Student('Fekete Gyula', 'férfi', '2002-10-20', 'mérnökség', [4, 3, 2, 2, 3])
];

$teachers = [
    new Teacher('Prof. Horváth Balázs', 'férfi', '1969-01-11', 'házas'),
    new Teacher('Dr. Cserepes Eperke', 'nő', '1970-03-29', 'egyedülálló'),
    new Teacher('Dr. Gál Abigél', 'nő', '1998-12-12', 'házas')
];

$groups = [
    new Group($teachers[0], [$students[0], $students[1]]),
    new Group($teachers[1], [$students[2], $students[3]]),
    new Group($teachers[2], [$students[4]])
];

//csoportok kiírása
foreach ($groups as $group) {
    $group->getGroupInfo();
}

//tanuló adatai
$students[0]->getStudentInfo();
echo $students[0]->getAverageGrade() . '<br><br>';

// Csoport átlagának kiszámítása
echo 'Group Average: ' . $groups[0]->getGroupAverage() . '<br><br>';