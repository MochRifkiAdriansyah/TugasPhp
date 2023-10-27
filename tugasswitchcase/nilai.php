<?php

$nilaimhs = 91;

if ($nilaimhs >= 90 && $nilaimhs <=100)
{
$grade = 'A';
}

elseif ($nilaimhs >= 80 && $nilaimhs <= 89)
{
$grade = 'B';
}

elseif ($nilaimhs >= 70 && $nilaimhs <= 79)
{

$grade = 'C';
}

elseif ($nilaimhs >= 60 && $nilaimhs <= 69)
{
$grade = 'D';
}

elseif ($nilaimhs >= 0 && $nilaimhs <= 59)
{
$grade = 'E';
}
echo"<br>";
echo "Hasil Studi Mahasiswa : " . "<br ?>";
echo "Nilai Studi = " . $nilaimhs;
echo "<br />";
echo "Nilai Grade = " . $grade;
echo"<br>";
switch ($grade)
{
case "A" :
echo "Selamat anda mendapatkan nilai sempurna";
break;
case "B" :
echo "Selamat nilai anda melebihi nilai rata-rata";
break;
case "C" :
echo "Anda harus berusaha lebih keras lagi";
break;
case "D" :
echo "Anda harus lebih berusaha lebih keras dan lebih rajin lagi";
break;
default :
echo "Maaf anda kurang beruntung, coba ambil lagi di semester depan";
break;
}


?>
