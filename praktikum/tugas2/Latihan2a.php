<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
function gantiStyle($tulisan, $style1, $style2) {
    return "<div class='$style1 $style2'>$tulisan</div>";
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
        .gaya1 {
            font-size: 28px;
            font-family: Arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding: 7px;
        }
        .gaya2 {
            border: 1px solid black;
            width: 600px;
            border-radius: 5px;
            box-shadow: 1px 1px 12px gray;
        }
    </style>
</head>
<body>
    <p><?php echo gantiStyle("Selamat datang di praktikum PW", "gaya1", "gaya2"); ?></p>
</body>
</html>