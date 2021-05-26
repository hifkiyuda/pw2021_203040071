<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
function tumpukanBola($tumpukan) {
    for( $i=1; $i<=$tumpukan; $i++ ) {
        for( $h=1; $h<=$i; $h++ ) {
            echo "<div class='bola'>$i</div>";
        }
        echo "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <style>
        .bola {
            display: inline-block;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            border: 5px solid black;
            background-color: salmon;
            margin: 3px;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(8); ?>
</body>
</html>