<?php

$listUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$anakAnak = 0;
$dewasa = 0;

foreach($listUsia as $umur) {
    if($umur >= 17) {
        $dewasa++;
    }else {
        $anakAnak++;
    }
}

echo "List usia : " . implode(", ", $listUsia) . "<br>";
echo "Jumlah Kategori Dewasa : $dewasa <br>";
echo "Jumlah Kategori Anak-anak : $anakAnak";

// selesai 11:28

?>

