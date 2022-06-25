<?php
echo"<style>";
echo"p {";
  echo"margin: 30px;";
  echo"font-size:132%";
echo"}";
echo"</style>";

echo"<p><h1 style=\"text-align:center;\">KPK</h1></p>";

$bil1 = $_POST["Bil1"];
$bil2 = $_POST["Bil2"];

function FPB(int $b1, int $b2){
	$b3 = -1;
	while ($b3 != 0){
		$b3 = $b1 % $b2;
		$b1 = $b2;
		$b2 = $b3;
	}
	return $b1;
}

function KPK(int $b1, int $b2){
	return ($b1 * $b2)/ FPB($b1, $b2);
}

echo"<p>Bilangan 1 Anda: ", $bil1,"</p>";
echo"<p>Bilangan 2 Anda: ", $bil2,"</p>";

echo"<p>Langkah pertama: tampilkan kelipatan dari ",$bil1,"<br>";
echo"Kelipatan ",$bil1,": ";  
for ($a = 1; $a <= $bil2; $a++){
	echo $bil1 * $a;
	if($a != $bil2){
		echo ", ";
	}
}

echo"<p>Langkah kedua: tampilkan kelipatan dari ",$bil2,"<br>";
echo"Kelipatan ",$bil2,": ";  
for ($a = 1; $a <= $bil1; $a++){
	echo $bil2 * $a;
	if($a != $bil1){
		echo ", ";
	}
}

echo"<p>Langkah ketiga: pilih kelipatan yang sama dan terkecil dari ", $bil1, " dan ", $bil2,"<br>
Kelipatan yang sama dan terkecil adalah ", KPK($bil1, $bil2),"</p>";

echo"<p><a href=KPK.php>Kembali ke halaman KPK</a><p>";
?>