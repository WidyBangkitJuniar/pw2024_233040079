<?php
    // ARRAY
    // Aray adalah variabel yang bisa menampung

    //Membuat Array
    $hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', "jum'at", 'Sabtu', 'Minggu');
    $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $myArray = ['Bangkkit', 11, false];
    $binatang = ['🐈‍⬛', '🐇', '🐒', '🐨', '🐄'];

    // Mencetak Array
    var_dump($hari);
    print_r($bulan);
    var_dump($myArray);
    var_dump($binatang[3]);
    echo $binatang[3];

    echo "<hr>";

    // Manipulasi Array
    // Menambah element di akhir Array
    $bulan[] = 'April';
    $bulan[] = 'Mei';
    print_r($bulan);

    echo "<hr>";
    
    array_push($bulan, 'Juni', 'Juli', 'Agustus');
    print_r($bulan);

    echo "<hr>";
    
    // Menambah element di awal Array
    array_unshift($binatang, '🐍', '🐓');
    print_r($binatang);

    echo "<hr>";

    // Menghapus element di akhir Array
    array_pop($hari);
    print_r($hari);

    echo "<hr>";

    // Menghapus element di awal Array
    array_shift($hari);
    print_r($hari);
?>