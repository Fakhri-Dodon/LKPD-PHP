<?php

    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $bilangan1 = array_intersect($bil1, $bil2);

    $bilangan2 = array_diff($bil1, $bil2);

    echo "<b>bilangan yang ada di kedua variabel</b>";
    echo "<br>";
    echo implode(", ", $bilangan1);
    echo "<br>";
    echo "<br>";
    echo "<b>bilangan yang tidak ada di kedua variabel</b>";
    echo "<br>";
    echo implode(", ", $bilangan2);

    // selesai 08:27
?>