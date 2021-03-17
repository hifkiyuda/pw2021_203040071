<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
$famous = [
    "Mohammad Salah" => "Liverpool", 
    "Cristiano Ronaldo" => "Juventus", 
    "Lionel Messi" => "Barcelona", 
    "Zlatan Ibrahimovic" => "Ac Milan", 
    "Neymar Jr" => "Paris Saint Germain",
    "Luca Modric" => "Real Madrid",
    "Sadio Mane" => "Liverpool"
];
$famous_baru = asort($famous);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <style>
        .fam {
            width: 150px;
            font-weight: bold;
        }
        .club {
            width: 200px;
        }
        .club span {
            font-weight: bold;
        }
    </style>
</head>
<body style="font-family: arial, sans-serif;">

    <p style="font-weight: bold;">Daftar pemain bola terkenal dan clubnya</p>
    <?php foreach($famous as $fam => $club) : ?>
        <table>
            <tr>
                <td class="fam"><?= "$fam"; ?></td>
                <td class="club"><?= "<span>:</span> $club"; ?></td>
            </tr>
        </table>
    <?php endforeach; ?>
    
</body>
</html>