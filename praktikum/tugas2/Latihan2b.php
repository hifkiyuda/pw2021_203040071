<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 

$jawabanIsset = "Isset adalah = fungsi untuk memeriksa apakah sebuah variabel sudah diset dan bukan NULL<br><br>";
$jawabanEmpty = "Empty adalah = fungsi untuk memeriksa apakan sebuah variabel kosong atau tidak";
function soal($style) {
    return "<div class='$style'>$GLOBALS[jawabanIsset] $GLOBALS[jawabanEmpty]</div>";
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
        .gaya {
            border: 2px solid black;
            font-family: Arial;
            width: 750px;
            padding: 14px;
        }
    </style>
</head>
<body>
    <?php echo soal("gaya"); ?>
</body>
</html>
