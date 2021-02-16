<?php
/*
Hifki Yuda Pratama
203040071
https://github.com/hifkiyuda/pw2021_203040071
Pertemuan 3 - 16 Februari 2021
Mempelajari mengenai struktur kendali PHP
*/
?>
<?php
// pengulangan
// for
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}


// while
$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}


// do.. while
$i = 0;
do {
    echo "Hello World! <br>";
$i++;
} while( $i < 5 );


// foreach : pengulangan khusus array


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris  {
            background-color:blue;
        }   
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
            <?php else : ?>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>