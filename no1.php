<?php

function checkStringForNumber() {
    $inputKalimat = "Selamat ulang tahun yang ke-17";
    $inputKalimat2 = "Selamat ulang tahun ya!";

    preg_match_all('/\d/', $inputKalimat2, $number);

    if(!empty($number[0])) {
        $hasil = implode(', ', $number[0]);
        echo "text mengandung angka : $hasil";
    }else { 
        echo "text tidak mengandung angka";
    }
}

checkStringForNumber();
// selesai 8:33

?>