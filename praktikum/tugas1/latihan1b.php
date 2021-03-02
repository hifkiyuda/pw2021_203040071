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
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ( $i=1; $i<=5; $i++ ) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for ( $i=1; $i<=5; $i++ ) : ?>
        <tr>
            <th>Baris <?php echo $i; ?></th>
            <?php for ( $h=1; $h<=5; $h++ ) : ?>
                <td>Baris <?php echo $i ?>, Kolom <?php echo $h; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>