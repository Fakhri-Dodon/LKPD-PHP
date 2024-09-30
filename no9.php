<?php

$uang = 140500;

function hitungLembaran($uang) {
    $rupiah = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];

    foreach($rupiah as $duit) {
        $jumlahLembar = intdiv($uang, $duit);
        $hasil[$duit] = $jumlahLembar;

        $uang %= $duit;
    }
    return $hasil;
}

$hasilRupiah = hitungLembaran($uang);

echo "Uang : Rp. " . number_format($uang, 0, '.', '.');
echo "<br>";
echo "Lembar Rupiah :";
echo "<br>";
echo "<br>";
foreach($hasilRupiah as $duit => $jumlahLembar) {
    if($jumlahLembar > 0) {
        echo "Rp. " . number_format($duit, 0, '.', '.') . " : $jumlahLembar";
        echo "<br>";
    }
}

// selesai 30:03
?>