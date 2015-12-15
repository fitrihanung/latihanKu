<?php
$nama ="fitri hanung wibowo";

if ($nama = 1) {
	echo "yes,namanya benar fitri hanung wibowo";
} else {
	echo "maaf,namanya bukan fitri hanung wibowo";
}


for ($i=0; $i < 10; $i++) { 
	echo"<br>". $i . "<br>";
}

$name = "fitri hanung wibowo";
switch ($name) {
	case 'fitri':
		echo "namanya kurang lengkap...";
		break;
	case 'hanung':
		echo "yang ini namanya juga kurang lengkap...";
		break;
	case 'wibowo':
		echo "yang ini juga kurang lengkap juga namanya...";
		break;
	case 'fitri hanung wibowo':
		echo "nah, kalo ini baru lengkap namanya FITRI HANUNG WIBOWO";
		break;
	default:
		echo "salah semua alias tidak ada yang benar";
		break;
}
?>