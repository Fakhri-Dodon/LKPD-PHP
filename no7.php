<?php

    $nama1 = "Fema Flamelina Putri";
    $nama2 = "Artasya Legina";

    function bandingkanNama($nama1, $nama2) {
        $jumlahKarakter1 = strlen($nama1);
        $jumlahKarakter2 = strlen($nama2);

        // echo "Nama pertama : $nama1" . "<br>";
        // echo "Nama Kedua : $nama2" . "<br>";
        // echo "<br>";

        if($jumlahKarakter1 > $jumlahKarakter2) {
            $selisih = $jumlahKarakter1 - $jumlahKarakter2;
            echo "Nama pertama : $nama1" . "<br>";
            echo "Nama Kedua : $nama2" . "<br>";
            echo "<br>";
            echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih karakter";
        }elseif($jumlahKarakter2 > $jumlahKarakter1) {
            $selisih = $jumlahKarakter2 - $jumlahKarakter1;
            echo "Nama pertama : $nama1" . "<br>";
            echo "Nama Kekter2 > $jumlahKaraktedua : $nama2" . "<br>";
            echo "<br>";
            echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : selisih $selisih karakter";
        }else {
            echo "Nama pertama : $nama1" . "<br>";
            echo "Nama Kedua : $nama2" . "<br>";
            echo "<br>";
            echo "Keduanya memiliki panjang karakter yang sama";
        }

    }

    bandingkanNama($nama1, $nama2);

// selesai 09:39
?>