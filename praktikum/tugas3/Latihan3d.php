<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
$famous = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ]
];
$play = 0;
$goal = 0;
$assist = 0;
for( $i=0; $i<count($famous); $i++ ) {
    $play += $famous[$i]["main"];
    $goal += $famous[$i]["gol"];
    $assist += $famous[$i]["assist"];
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
        table tr th {
            padding-right: 15px;
        }
        table tr td {
            padding-right: 15px;
        }
    </style>
</head>
<body style="font-family: Arial;">
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>CLUB</th>
                <th>MAIN</th>
                <th>GOL</th>
                <th>ASSIST</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $famous as $no => $fam ) : ?>
            <tr>
                <td><?= $no+1; ?></td>
                <td><?= $fam["nama"]; ?></td>
                <td><?= $fam["club"]; ?></td>
                <td><?= $fam["main"]; ?></td>
                <td><?= $fam["gol"]; ?></td>
                <td><?= $fam["assist"]; ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>#</td>
                <td colspan="2" style="text-align: center; font-weight: bold;">Jumlah</td>
                <td><?= $play; ?></td>
                <td><?= $goal; ?></td>
                <td><?= $assist; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>