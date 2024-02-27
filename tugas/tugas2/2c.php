<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c.php</title>
    <link rel="stylesheet" href="2c.css">
</head>
<body>
    <?php for ($i = 10; $i >= 1; $i--) : ?>
        <div class="row">
            <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="kotak"><h2><?= "$j" ?></h2></div>
            <?php if($i == $j) : ?>
                <br>
            <?php endif ; ?>
            <?php endfor ; ?>
        </div>
        <?php endfor ; ?>
</body>
</html>