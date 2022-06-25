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

echo"<p><h1 style=\"text-align:center;\">FPB</h1></p>";
echo"<p>FPB atau faktor persekutuan terbesar adalah faktor terbesar dari dua atau lebih bilangan bulat yang membagi bilangan bulat tersebut.<br>
Untuk mencari FPB pertama kita harus mengetahui faktor dari bilangan-bilangan yang dicari FPBnya.<br></p>";
echo"<p>Sebagai contoh mari kita cari FBP dari bilangan 42 dan 18.</p>";
echo"<p>Langkah pertama: cari faktor dari 42.<br>
Faktor 42: 1, 2, 3, 6, 7, 14, 21, 42</p>";
echo"<p>Langkah kedua: cari faktor dari 18.<br>
Faktor 18: 1, 2, 3, 6, 9, 18</p>";
echo"<p>Langkah ketiga: pilih faktor yang sama dan terbesar dari 42 dan 18.<br>
Faktor yang sama dan terbesar adalah 6.</p>";
echo"<p>Langkah keempat: ambil kesimpulan.<br>
Jadi FPB dari 42 dan 18 adalah 6.</p>";
echo"<p>Silahkan coba dengan angka anda sendiri</p>";

echo"<form action=\"Action FPB.php\" method=\"post\">";
echo"<p>Bilangan 1: <input type=\"text\" name=\"Bil1\"></p>";
echo"<p>Bilangan 2: <input type=\"text\" name=\"Bil2\"></p>";
echo"<p><input type=\"submit\"></p>";
echo"</form>";

echo"<p><a href=Home.php>Kembali ke Home</a></p>";

echo"</body>";
echo"</html>";
?>