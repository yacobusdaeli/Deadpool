<?php
require '../method.php';
session_start();

$id = $_GET['id_film'];

$query = "SELECT pemeran.nama_tokoh, pemeran.nama_asli FROM pemeran
INNER JOIN film on pemeran.id_film = film.id_film WHERE pemeran.id_film=$id";
$cast = tampilsemua($query);

$query2 = "SELECT*FROM film WHERE id_film=$id";
$film = tampilsemua($query2)[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail film</title>
</head>

<body>
    <h1>nama film: <?=$film['film']?></h1>
    <h2>sinopsis:<?=$film['sinopsis']?></h2>
    <h3>penghargaan:<?=$film['penghargaan']?></h3>
    <h5>
        <ul>
            <?php foreach ($cast as $tokoh): ?>
            <li><?=$tokoh['nama_asli'];?> (<?=$tokoh['nama_tokoh'];?>)</li>
            <?php endforeach;?>
        </ul>
    </h5>
    <h3>Trailer:
        <table>
            <tr>
                <th><iframe width="640" height="360" src="https://www.youtube.com/embed/<?=$film['trailer']?>"
                        frameborder="0" allowfullscreen>
                        <p><strong>Trailer:</strong></p>
                </th>
            </tr>
            <tr>
                <th>TOKOh</th>
            </tr>
        </table>

    </h3>
    <h4>


    </h4>
    <h1>
        test
    </h1>
</body>

</html>