<?php
// PHP Program to Find Grade of a Student using Switch Case

// These are the marks of five subjects
$nilai1 = 95;
$nilai2 = 85;
$nilai3 = 90;
$nilai4 = 70;
$nilai5 = 80;

// It will calculate total, average, percentage, and grade
$total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

// It will divides average by 10 check switch expression
$sAvg = (int) ($average / 10);

// It will calculate the Grade
switch ($sAvg) {
    case 10:
        $grade = 'A';
        break;

    case 9:
        $grade = 'A';
        break;

    case 8:
        $grade = 'B';
        break;

    case 7:
        $grade = 'C';
        break;

    case 6:
        $grade = 'D';
        break;

    default:
        $grade = 'E';
        break;
}

// It will print the final output
echo "=========Hasil Nilai=========== <br>";
echo "<br>";
echo "Total Nilai           = " . $total . "/500\n<br>";
echo "Nilai Rata-Rata       = " . $average . "\n <br>";
echo "Nilai Presentation    = " . $percentage . "%\n<br>";
echo "Grade                 = '" . $grade . "'\n<br>";

?>