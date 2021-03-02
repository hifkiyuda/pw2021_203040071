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
        td {
            border: 3px solid black;
            margin: 3px;
            display: inline-block;
        }
        .lightblue {
            background-color: lightblue;
        }
        .salmon {
            background-color: salmon;
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="30">
        <?php for ( $x=1; $x<=6; $x++ ) : ?>
            <tr>
                <?php for ( $y=1; $y<=6; $y++ ) : ?>
                    <?php if ( ($x + $y) %2 == 0 ) { ?>
                        <td class="lightblue"></td>
                        <?php } else if (($x + $y) %2 != 0) { ?>
                        <td class="salmon"></td>
                        <?php } ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>