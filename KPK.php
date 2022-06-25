<?php
echo"<!DOCTYPE html>";
echo"<html>";
echo"<body>";
echo"<style>";
echo"p {";
  echo"margin: 30px;";
  echo"font-size:132%";
echo"}";
echo"</style>";

echo"<p><h1 style=\"text-align:center;\">KPK</h1></p>";
echo"<p>KPK atau kelipatan persekutuan terkecil adalah kelipatan terkecil dari dua atau lebih bilangan bulat.<br>
Untuk mencari KPK pertama kita harus mengetahui kelipatan dari bilangan-bilangan yang dicari KPKnya.<br></p>";
echo"<p>Sebagai contoh mari kita cari KPK dari bilangan 12 dan 10.</p>";
echo"<p>Langkah pertama: tampilkan kelipatan 12.<br>
Kelipatan 12: 12, 24, 36, 48,60, 72, 84, 96, 108, 120</p>";
echo"<p>Langkah kedua: tampilkan kelipatan 10.<br>
Faktor 18: 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120</p>";
echo"<p>Langkah ketiga: pilih kelipatan yang sama dan terkecil dari 12 dan 10.<br>
Kelipatan yang sama dan terkecil adalah 60.</p>";
echo"<p>Langkah keempat: ambil kesimpulan.<br>
Jadi KPK dari 12 dan 10 adalah 60.</p>";
echo"<p>Silahkan coba dengan angka anda sendiri</p>";

echo"<form action=\"Action KPK.php\" method=\"post\">";
echo"<p>Bilangan 1: <input type=\"text\" name=\"Bil1\"></p>";
echo"<p>Bilangan 2: <input type=\"text\" name=\"Bil2\"></p>";
echo"<p><input type=\"submit\"></p>";
echo"</form>";

echo"<p><a href=Home.php>Kembali ke Home</a></p>";

echo"</body>";
echo"</html>";

?>