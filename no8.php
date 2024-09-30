<?php

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$cariPersamaan = array_filter($data, function($value) use ($cari) {
    return $value == $cari;
});

$jumlah = count($cariPersamaan);

echo "Jumlah angka $cari = $jumlah";

// selesai 09:41

?>