<!-- <?php
//array
//membuat array
$hari = array("senin", "selasa", "rabu",);
$bulan = array("januari", "februari", "maret",);
$arr = [100, "teks", true];
//menampilkan array
//versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan)
//menampilkan 1 elemen array
?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widt=device-widt, initial-scale=1.0">
        <title>latihan array</title>
        <style>
            .kontak {
            width : 30px;
            height : 30px;
            background-color: #BADA55;
            text-align: 30px;3




            
            line-height: 30px;
            margin:3px;
            float: left;
            transition: 1s;
            }
            .kontak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }
            .clear {
                clear : both;
            }
            </style>
            </head>
            <body>
                <?php
                $angka = [
                    [1,2,3],
                    [4,5,6],
                    [7,8,9]
                ];
                ?>
                <?php foreach( $angka as $a ) : ?>
                 <?php foreach( $a as $b ) : ?>
                <div class="kontak"><?= $b; ?></div>
                <?php endforeach; ?>
                <div class="clear"></div>
                <?php endforeach; ?>

        </body>
        </html>