<?php 
/*
Hifki Yuda Pratama
203040071
SHIFT Jumat 10.00
*/
?>
<?php 
$movie = [
    [
        "judul" => "Tenet",
        "cast" => "John David Washington, Robert Pattinson, Elizabeth Debicki",
        "rating" => "7,5",
        "genre" => "Action, Adventure",
        "harga" => "Rp 289.000",
        "gambar" => "tenet.jpg"
    ],
    [
        "judul" => "The Shawshank Redemption",
        "cast" => "Tim Robbins, Morgan Freeman, Bob Gunton",
        "rating" => "9,3",
        "genre" => "Drama",
        "harga" => "Rp 216.000",
        "gambar" => "shawshank.jpg"
    ],
    [
        "judul" => "The Secret Life of Walter Mitty",
        "cast" => "Ben Stiller, Kristen Wiig, Shirley MacLaine",
        "rating" => "7,3",
        "genre" => "Comedy, Drama, Action",
        "harga" => "Rp 216.000",
        "gambar" => "mitty.jpg"
    ],
    [
        "judul" => "1917",
        "cast" => "George MacKay, Dean-Charles Chapman, Mark Strong",
        "rating" => "8,3",
        "genre" => "Drama, Suspense",
        "harga" => "Rp 144.000",
        "gambar" => "1917.jpg"
    ],
    [
        "judul" => "Pride & Prejudice",
        "cast" => "Keira Knightley, Talulah Riley, Rosamund Pike",
        "rating" => "7,8",
        "genre" => "Drama, Romance",
        "harga" => "Rp 144.000",
        "gambar" => "pride.jpg"
    ],
    [
        "judul" => "The Perks of Being a Wallflower",
        "cast" => "Logan Lerman, Emma Watson, Ezra Miller",
        "rating" => "8,0",
        "genre" => "Drama, Romance",
        "harga" => "Rp 144.000",
        "gambar" => "wallflower.jpg"
    ],
    [
        "judul" => "Interstellar",
        "cast" => "	Matthew McConaughey, Anne Hathaway, Jessica Chastain",
        "rating" => "8,6",
        "genre" => "Science Fiction, Action",
        "harga" => "Rp 202.000",
        "gambar" => "interstellar.jpg"
    ],
    [
        "judul" => "Joker",
        "cast" => "Keira Knightley, Talulah Riley, Rosamund Pike",
        "rating" => "8,4",
        "genre" => "Drama, Suspense",
        "harga" => "Rp 144.000",
        "gambar" => "joker.jpg"
    ],
    [
        "judul" => "Parasite",
        "cast" => "Kang Ho Song, Sun Kyun Lee, Yeo Jeong Cho",
        "rating" => "8,6",
        "genre" => "Drama, Suspense",
        "harga" => "Rp 217.000",
        "gambar" => "parasite.jpg"
    ],
    [
        "judul" => "Midsommar",
        "cast" => "	Florence Pugh, Jack Reynor, Will Poulter",
        "rating" => "7,1",
        "genre" => "Horror, Suspense",
        "harga" => "Rp 144.000",
        "gambar" => "midsommar.jpg"
    ],
    [
        "judul" => "Into the Wild",
        "cast" => "Emile Hirsch, Marcia Gay Harden, William Hurt",
        "rating" => "8,1",
        "genre" => "Drama, Action",
        "harga" => "Rp 72.000",
        "gambar" => "wild.jpg"
    ],
    [
        "judul" => "Avengers: Endgame",
        "cast" => "Robert Downey Jr., Chris Evans, Mark Ruffalo",
        "rating" => "8,4",
        "genre" => "Action, Adventure, Science FIction",
        "harga" => "Rp 289.000",
        "gambar" => "endgame.jpg"
    ],
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040071</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-dark table-borderless table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Poster</th>
                <th>Judul</th>
                <th>Cast</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $movie as $no => $mv ) : ?>
            <tr>
                <td><?= $no+1; ?></td>
                <td><img src="img/<?= $mv["gambar"]; ?>"></td>
                <td><?= $mv["judul"]; ?></td>
                <td><?= $mv["cast"]; ?></td>
                <td><?= $mv["rating"]; ?></td>
                <td><?= $mv["genre"]; ?></td>
                <td><?= $mv["harga"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>