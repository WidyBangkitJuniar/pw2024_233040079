<?php
    $hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 4b</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>    
        <?php for($i = 0; $i < count($hardware); $i++) { ?>
            <li>
                <?= $hardware[$i]; ?>
            </li>
        <?php } ?>
    </ol>
    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_push($hardware, "Card Reader", "Modem"); sort($hardware);
         for($i = 0; $i < count($hardware); $i++) { ?>
            <li>
                <?= $hardware[$i]; ?>
            </li>
        <?php } ?>
    </ol>
</body>
</html>