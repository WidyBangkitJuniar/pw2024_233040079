<?php
    $binatang = ["🐈‍⬛", "🐇", "🐒", "🐨", "🐄", "🐍"];
    $warna = ["Ungu", "Putih", "Cokelat", "Abu-abu", "Hitam Putih", "Hijau"];
    $makanan = ["🥙", "🍗", "🍿", "🌭", "🍟"];
    // Mengurutkan Array
    // sort(), rsort()
    // sort($warna);

    // Mencetak Array untuk user
    // for, foreach
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?>, <?= $warna[$i]; ?></li>
        <?php } ?>
    </ol>
    <h3>Daftar Warna</h3>
    <ol>
        <?php for($i = 0; $i < 6; $i++) { ?>
            <li><?= $warna[$i]; ?></li>
        <?php } ?>
    </ol>
    <h3>Daftar Makanan</h3>
    <ul>
        <?php for($i = 0; $i < 5; $i++) { ?>
            <li><?= $makanan[$i]; ?></li>
        <?php } ?>
    </ul>
    
    
    <hr>

    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach($binatang as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>
    <h3>Daftar Warna</h3>
    <ol>
        <?php foreach($warna as $w) : ?>
            <li><?= $w; ?></li>
        <?php endforeach; ?>
    </ol>
    <h3>Daftar Makanan</h3>
    <ul>
        <?php foreach($makanan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>