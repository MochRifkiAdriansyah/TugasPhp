<center><h1>Luas Bangun Datar Bro</h1> </center>
<?php
//Persegi
  echo "Luas Persegi";
  echo "<hr>";
  echo "<br>";
  $sisi = 4;
  $luas_persegi = $sisi * $sisi;
   
  echo "Panjang sisi persegi = $sisi <br>";
  echo "Rumus Luas persegi = (Sisi x Sisi) <br>";
  echo "Luas persegi = ($sisi x $sisi) = $luas_persegi cm²<br>";
  echo "===========================================================";
  echo "<br>";

//Persegi panjang
  echo "Luas Persegi Panjang";
  echo "<hr>";
  echo "<br>";
  $panjang = 8;
  $lebar = 9;
  $luas_persegi_panjang= $panjang*$lebar;
   
  echo "Panjang persegi Panjang = $panjang <br>";
  echo "Lebar persegi Panjang = $lebar <br>";
  echo "Rumus Luas persegi Panjang = (Panjang x Lebar) <br>";
  echo "Luas persegi Panjang = ($panjang x $lebar) = $luas_persegi_panjang cm²<br>";
  echo "===========================================================";
  echo "<br>";

//Segitiga
  echo "Luas Segitiga";
  echo "<hr>";
  echo "<br>";
  $alas = 8;
  $tinggi = 2;
  $luas_segitiga= 0.5*$alas*$tinggi;
   
  echo "Alas Segitiga = $alas <br>";
  echo "Tinggi Segitiga = $tinggi <br>";
  echo "Rumus Luas Segitiga = (0.5 x Alas x Tinggi) <br>";
  echo "Luas Segitiga = (0.5 x $alas x $tinggi ) = $luas_segitiga cm²<br>";
  echo "===========================================================";
  echo "<br>";

// Lingkaran
echo "Luas Lingkaran";
echo "<hr>";
echo "<br>";
$r = 14;
$luas_J= 22/7*($r*$r);
 
echo "Jari-Jari = $r <br>";
echo "Rumus Luas Lingkaran =  π x r² <br>";
echo "Luas Lingkaran = 22/7 x($r)² = $luas_J cm² <br>";
echo "===========================================================";
echo "<br>";

//Belah Ketpat
echo "Luas Belah Ketupat";
echo "<hr>";
echo "<br>";
$d1 = 16;
$d2 = 10;
$luas_Belah_Ketupat= 1/2*$d1*$d2;
 
echo "Diagonal 1 = $d1 <br>";
echo "Diagonal 2 = $d2 <br>";
echo "Rumus Belah Ketupat = (1/2 x Diagonal1 x Diagonal2) <br>";
echo "Luas Belah Ketupat = (1/2 x $d1 x $d2 ) = $luas_Belah_Ketupat cm² <br>";
echo "===========================================================";
echo "<br>";
?>