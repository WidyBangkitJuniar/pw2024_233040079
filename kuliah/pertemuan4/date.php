<?php
    // date
    // untuk menampilkan tanggal dengan format tertentu
    echo date("l, d/F/Y");

    echo "<br>";

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu dari 1 Januari 1970
    // echo time();
    echo date("l, d M Y", time()+60*60*24*100);

    echo "<br>";

    // mktime
    // Membuat sendiri detik
    // mktime(0,0,0,0,0,0);
    // Jam, Menit, Detik, Bulan, Tanggal, Tahun 
    echo date("l, d M Y", mktime(0,0,0,6,11,2005));

    echo "<br>";

    // strtotime
    echo date("l, d M Y", strtotime("11 Juni 2005"));
?>