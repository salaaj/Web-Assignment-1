<?php
function calculateGrade($marks)
{
    if ($marks >= 80) {
        return 'A+';
    } elseif ($marks >= 75) {
        return 'A';
    } elseif ($marks >= 70) {
        return 'A-';
    } elseif ($marks >= 65) {
        return 'B+';
    } elseif ($marks >= 60) {
        return 'B';
    } elseif ($marks >= 55) {
        return 'B-';
    } elseif ($marks >= 50) {
        return 'C+';
    } elseif ($marks >= 45) {
        return 'C';
    } elseif ($marks >= 40) {
        return 'D';
    } elseif ($marks >= 35) {
        return 'E';
    }else {
        return 'F';
    }
}

function assignGrades($students)
{
    foreach ($students as &$student) {
        $student['grade'] = calculateGrade($student['marks']);
    }
    return $students;
}

$students = [
    ['name' => 'Maria', 'marks' => 85],
    ['name' => 'Sahad', 'marks' => 72],
    ['name' => 'Emon', 'marks' => 58],
    ['name' => 'Syfur', 'marks' => 91],
];

$gradedStudents = assignGrades($students);

foreach ($gradedStudents as $student) {
    echo "Name: {$student['name']}, Marks: {$student['marks']}, Grade: {$student['grade']}\n";
}