<?php
    // ARRAY
    // Aray adalah variabel yang bisa menampung

    // 1.Membuat Array
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "jum'at", "Sabtu", "Minggu");
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    $mahasiswa = ["Bangkit", 3, false];
    $binatang = ["🐈‍⬛", "🐇", "🐒", "🐨", "🐄"];

    // 2.Mencetak Array
    // Mencetak 1 element pada Array, menggunakan index
    echo $hari[5];
    echo "<br>";
    echo $bulan[5];
    echo "<br>";
    echo $mahasiswa[0];

    echo "<hr>";

    // Mencetak seluruh isi Array
    // digunakan khusus unduk debugging
    // var_dump() atau print_r()
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    var_dump($mahasiswa);
    echo "<br>";
    var_dump($binatang[3]);
    echo "<br>";
    echo $binatang[3];

    echo "<hr>";

    // 3.Manipulasi Array
    // Menambah element di akhir Array
    // Ada dua cara untuk menambahkan di akhir array
    // cara pertamma menggunakan []
    $hari[] = "Kamis";
    $hari[] = "Sabtu";
    print_r($hari);

    echo "<br>";
    
    // Cara kedua menggunakan array_push()
    array_push($bulan, "Juni", "Juli", "Agustus");
    print_r($bulan);

    echo "<hr>";
    
    // Menambah element di awal Array
    // array_unshift()
    array_unshift($mahasiswa, "233040079");
    print_r($mahasiswa);
    echo "<br>";
    array_unshift($binatang, "🐍", "🐓");
    print_r($binatang);

    echo "<hr>";

    // Menghapus element di akhir : array_pop()
    array_pop($hari);
    print_r($hari);
    echo "<br>";
    
    // Menghapus element di awal : array_shift()
    array_shift($hari);
    print_r($hari);
?>