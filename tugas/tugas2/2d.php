<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d.php</title>
    <link rel="stylesheet" href="2d.css">
</head>
<body>
    <?php for ($i = 1; $i <= 5; $i++) :?>
    <?php if($i % 2 == 0) : ?>
        <div class="row">
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <?php if($j % 2 == 0) : ?>
                    <div class="kotak1"></div>
                    <?php else : ?>
                    <div class="kotak2"></div>
                    <?php endif ; ?>
                    <?php if($i == $j) : ?>
                        <br>
                        <?php endif ; ?>
                        <?php endfor ; ?>
        </div>
        <?php else : ?>
            <div class="row">
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <?php if($j % 2 == 0) : ?>
                    <div class="kotak2"></div>
                    <?php else : ?>
                        <div class="kotak1"></div>
                        <?php endif ; ?>
                        <?php if($i == $j) : ?>
                            <br>
                            <?php endif ; ?>
                            <?php endfor ; ?>
            </div>
            <?php endif ; ?>
            <?php endfor ; ?>
</body>
</html>