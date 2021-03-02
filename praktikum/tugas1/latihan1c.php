<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <style>
        p {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            border: 5px solid black;
            background-color: salmon;
            display: inline-block;
            margin: 0 20px 12px 0;
            text-align: center;
            line-height: 120px;
            font-size: 60px;
        }
    </style>
</head>
<body>
    <?php for ( $i=1; $i<=3; $i++ ) : ?>
        <?php for ( $h=1; $h<=$i; $h++ ) : ?>
            <p><?= $i; ?></p>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>