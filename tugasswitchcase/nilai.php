<?php


$nilaimahasiswa = 100;

switch($nilaimahasiswa)
{
   case ($nilaimahasiswa > 90) :
      $grade = "A";
      break;
   case ($nilaimahasiswa <= 90):
      $grade = "B";
      break;
   case ($nilaimahasiswa <= 80):
      $grade = "C";
     
      break;
   case ($nilaimahasiswa <= 70):
      $grade = "D";
      break;
   case ($nilaimahasiswa <= 60):
      $grade = "E";
     
      break;
  
  
}

echo "Hasil Studi Mahasiswa : " . "<br ?>";
echo "Nilai Studi = " . $nilaimahasiswa;
echo "<br />";
echo "Nilai Grade = " . $grade;
