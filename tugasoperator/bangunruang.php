<center><h1>Volume Bangun Ruang Bro</h1> </center>
<?php
//Kubus
  echo "Volume Kubus";
  echo "<hr>";
  echo "<br>";
  $s = 8;
  $volume_kubus = $s * $s * $s;
   
  echo "Panjang sisi Kubus = $s <br>";
  echo "Rumus Volume Kubus = (Sisi x Sisi x Sisi) <br>";
  echo "Luas persegi = ($s x $s x $s) = $volume_kubus cm³<br>";
  echo "===========================================================";
  echo "<br>";

//Balok
  echo "Volume Balok";
  echo "<hr>";
  echo "<br>";
  $p = 7;
  $l = 3;
  $t= 6;
  $volume_balok= $p*$l*$t;
   
  echo "Panjang Balok = $p <br>";
  echo "Lebar Balok = $l <br>";
  echo "Tinggi Balok = $t <br>";
  echo "Rumus Volume Balok = (Panjang x Lebar x Tinggi) <br>";
  echo "Volume Balok = ($p x $l*$t) = $volume_balok cm³<br>";
  echo "===========================================================";
  echo "<br>";

// Tabung
echo "Luas Lingkaran";
echo "<hr>";
echo "<br>";
$r = 7;
$t= 10;
$volume_tabung= 22/7*($r*$r)*$t;
 
echo "Jari-Jari Tabung = $r <br>";
echo "Tinggi Tabung = $r <br>";
echo "Rumus Volume Tabung =  phi x Jarijari² x Tinggi <br>";
echo "Luas Lingkaran = 22/7 x($r)² x $t= $volume_tabung cm³ <br>";
echo "===========================================================";
echo "<br>";


?>