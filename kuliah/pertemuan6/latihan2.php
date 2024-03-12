<?php 
    // $mahasiswa = [
    //     ["Widy Bangkit", "233040079", "widybangkit@gmail.com", "Teknikk Informatika"],
    //     ["233040108", "Bangkit Juniar", "bangkitjuniar@gmail.com", "Teknikk Informatika"]
    //     ];

    // array associative
    // definisinya sama seperti array numerik, kecuali key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Bangkit Juniar",
            "nrp" => "233040079",
            "email" => "bangkitjuniar@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "bangkit.jpg"
        ],
        [
            "nama" => "Teguh Putra",
            "nrp" => "233010110",
            "email" => "teguhputra@gmail.com",
            "jurusan" => "Teknik Industri",
            "gambar" => "teguh.jpg"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li><?= $mhs ["nama"]; ?></li>
        <li><?= $mhs ["nrp"]; ?></li>
        <li><?= $mhs ["jurusan"]; ?></li>
        <li><?= $mhs ["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>