<?php
    // Mengecek apakah sebuah bilangan itu GANJIL atau GENAP

    function cek_ganjil_genap($angka) // parameter
    {
    // Jika $angka dibagi 2, sisanya 1 maka GANJIL
    if ($angka % 2 == 1){
        return "$angka adalah bilangan GANJIL!";
    } else {
        return "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap(10); // argument
echo "<br>";
echo cek_ganjil_genap(19); // argument
echo "<br>";
echo cek_ganjil_genap(30); // argument
?>