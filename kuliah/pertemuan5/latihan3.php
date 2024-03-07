<?php
//Array Multidimensi
    $binatang = [["🐈‍⬛", "Ungu"], ["🐇", "Putih"], ["🐒", "Cokelat"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan Saya V2</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
            <li>
                <?= $binatang[$i][0]; ?> - <?= $binatang[$i][1]; ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>