<?php

$awalBekerja = 8;
$selesaiBekerja = 22;

$jamKerja = 8;
$jamPertamaLebih = 50000;
$jamBerikutnya = 25000;

$lamaBekerja = $selesaiBekerja - $awalBekerja;
$jamLebih = $lamaBekerja - $jamKerja;
$kompensasiJam = $jamLebih - 1;

if($lamaBekerja > 8) {
    if($lamaBekerja <= 1) {
        echo "Lama Bekerja : $lamaBekerja";
        echo "<br>";
        echo "Jam Lebih : $jamLebih";
        echo "<br>";
        echo "Jumlah Kompensasi : Rp " . number_format($jamPertamaLebih, 0, '.', '.');
    }else {
        $jumlahKompensasi = $jamPertamaLebih + ($jamBerikutnya * $kompensasiJam);
        echo "Lama Bekerja : $lamaBekerja";
        echo "<br>";
        echo "Jam Lebih : $jamLebih";
        echo "<br>";
        echo "Jumlah Kompensasi : Rp " . number_format($jumlahKompensasi, 0, '.', '.');
    }
}else {
    echo "Lama Kerja : $lamaBekerja";
    echo "<br>";
    echo "Jam Lebih : $jamLebih";
    echo "<br>";
    echo "Jumlah Kompensasi : Tidak ada";
}

// selesai 20:31

?>