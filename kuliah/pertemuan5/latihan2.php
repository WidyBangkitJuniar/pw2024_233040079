<?php
    $binatang = ['🐈‍⬛', '🐇', '🐒', '🐨', '🐄', '🐍'];
    $warna = ['Ungu', 'Putih', 'Cokelat', 'Abu-abu', 'Hitam Putih', 'Hijau'];

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
    <title>Peternakan Saya</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?>, <?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar Warna</h2>
    <ul>
        <?php for($i = 0; $i < 6; $i++) { ?>
            <li><?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach($binatang as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>
    <h2>Daftar Warna</h2>
    <ol>
        <?php foreach($warna as $w) { ?>
            <li><?= $w; ?></li>
        <?php } ?>
    </ol>
</body>
</html>