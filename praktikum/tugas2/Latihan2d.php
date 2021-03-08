<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
function hitungDeterminan($elementA, $elementB, $elementC, $elementD) {
    // baris kode perhitungan determinan
    $matriks = ($elementA * $elementD) - ($elementB * $elementC);
    // menampilkan matriks
    echo "<table style='border-left:2px solid black; border-right:2px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td>$elementA</td>
                <td>$elementB</td>
            </tr>
            <tr>
                <td>$elementC</td>
                <td>$elementD</td>   
            </tr>
        </table>";
        // menampilkan teks dibawah matriks
    echo "<b>Determinan dari matriks tersebut adalah $matriks</b>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
</head>
<body>
    <?php hitungDeterminan(8,6,4,2); ?>
</body>
</html>