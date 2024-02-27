<?php
    echo "<h4>Menghitung luas lingkaran</h4>";

    function hitungLuaslingkaran($r) {
        echo "jari-jari = $r <br>";
        $l = ($r * $r) * 3.14;
        echo "Luas lingkaran = $l cm²";
    }

    hitungLuaslingkaran(10);

    echo "<hr>";

    echo "<h4>Menghitung keliling lingkaran</h4>";

    function hitungKelilinglingkaran($r) {
        echo "jari-jari = $r <br>";
        $c = 2 * 3.14 * $r;
        echo "keliling lingkaran = $c cm²";
    }

    hitungKelilinglingkaran(20);
?>