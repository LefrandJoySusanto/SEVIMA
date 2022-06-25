<?php
echo"<style>";
echo"p {";
  echo"margin: 30px;";
  echo"font-size:132%";
echo"}";
echo"</style>";

echo"<p><h1 style=\"text-align:center;\">FPB</h1></p>";

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

echo"<p>Bilangan 1 Anda: ", $bil1,"</p>";
echo"<p>Bilangan 2 Anda: ", $bil2,"</p>";

echo"<p>Langkah pertama: cari faktor dari ",$bil1,"<br>";
echo"Faktor ",$bil1,": ";  
for ($a = 1; $a <= $bil1; $a++){
	if($bil1 % $a == 0){
		echo $a;
		if($a != $bil1){
			echo ", ";
		}
	}
}

echo"<p>Langkah pertama: cari faktor dari ",$bil2,"<br>";
echo"Faktor ",$bil2,": ";  
for ($a = 1; $a <= $bil2; $a++){
	if($bil2 % $a == 0){
		echo $a;
		if($a != $bil2){
			echo ", ";
		}
	}
}

echo"<p>Langkah ketiga: pilih faktor yang sama dan terbesar dari ",$bil1, " dan ",$bil2,"<br>";
echo"Faktor yang sama dan terbesar adalah ",FPB($bil1, $bil2),"</p>";

echo"<p><a href=FPB.php>Kembali ke halaman FPB</a></p>";
?>
