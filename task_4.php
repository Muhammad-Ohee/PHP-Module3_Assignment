<?php
/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students.
Each student has grades for three subjects: Math, English, and Science.
Write a PHP function which takes "$studentGrades" as an argument to calculate and
print the average grade for each student.
*/

// Create a multidimensional array with student grades
$studentGrades = array(
    'A' => array('Math' => 90, 'English' => 88, 'Science' => 96),
    'B' => array('Math' => 94, 'English' => 84, 'Science' => 98),
    'C' => array('Math' => 98, 'English' => 80, 'Science' => 94)
);

// Function to calculate and print the average grade for each student
function calculateAverages($grades) {
    foreach($grades as $student=>$subjects){
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        $average = round($average, 2);
        echo "$student's average grade: $average\n";
    }
}

// Call the function with the $studentGrades array
calculateAverages($studentGrades);

?>