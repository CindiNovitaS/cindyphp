
<?php
// $mahasiswas = [
//     [" cindi novita sari", "036040023", "cindinov@gamail.com", "fakultas kedokteran"],
//     [" ailsa nabila", "8863040001", "ailsanabila@gamail.com", "manajemen aset publik"],
//      [" amrita nur", "1247853571", "amritanur@gamail.com", "sastra jepang"]
// ];

//array Associative
//definisinya sama dengan numerik, kecuali key-nya adalah String yang kitabuat sendiri
$mahasiswa = [
    [
        "nama" => "cindi novita sari",
        "nrp" => "036040023",
        "email" => "cindinov@gamail.com",
        "jurusan" => "fakultas kedokteran",
        "gambar" => "cin2.jpg"
    ],
    [
        "nama" => "ailsa nabila",
        "nrp" => "8863040001",
        "email" => "ailsanabila@gamail.com",
        "jurusan" => "ailsanabila@gamail.com",
        "gambar" => "cin2.jpg"
    ],
    [
        "nama" => "amrita nur",
        "nrp" => "1247853571",
        "email" => "amritanur@gamail.com",
        "jurusan" => "sastra jepang",
        "gambar" => "cin2.jpg"
    ]
    ];
    //echo mahasiswa[1] ["email"];
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <meta charset http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/cin2.jpg">
    </li>
    <li> Nama: <?=$mhs["nama"]; ?></li>
    <li> Nrp: <?=$mhs["nrp"]; ?></li>
    <li> Email: <?=$mhs["email"]; ?></li>
    <li> Jurusan: <?=$mhs["jurusan"]; ?></li>

</ul>

<?php endforeach; ?>

</body>
</html>