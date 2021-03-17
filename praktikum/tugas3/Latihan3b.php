<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
$famous = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
</head>
<body style="font-family: arial, sans-serif;">

    <p style="font-weight: bold;">Daftar pemain bola terkenal</p>
    <ol>
        <?php foreach( $famous as $fam ) : ?>
            <li><?= $fam; ?></li>
        <?php endforeach; ?>
    </ol>


    <p style="font-weight: bold;">Daftar pemain bola terkenal baru</p>
    <?php 
    // Menambahkan pemain bola baru
    $famous_baru = array_push($famous, "Luca Modric", "Sadio Mane");
    // Mengurutkan sesuai abjad secara menurun
    $famous_baru = sort($famous);
    ?>
    <ol>
        <?php foreach( $famous as $fab ) : ?>
            <li><?= $fab; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>
