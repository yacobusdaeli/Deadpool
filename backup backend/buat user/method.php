<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'deadpool';

$conn = mysqli_connect($host, $user, $pass, $db);

function addCast($data)
{
    global $conn;
    $nama_asli = $data['nama_asli'];
    $nama_tokoh = $data['nama_tokoh'];
    $biografi = $data['biografi'];
    $id_film = $data['id_film'];
    //upload gambar
    $foto = uploadFoto();
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO pemeran(nama_asli,nama_tokoh,biografi,foto,id_film) VALUES('$nama_asli','$nama_tokoh','$biografi','$foto','$id_film')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function addFilm($data)
{
    global $conn;
    $film = $data['film'];
    $trailer = $data['trailer'];
    $sinopsis = $data['sinopsis'];
    $penghargaan = $data['penghargaan'];

    $query = "INSERT INTO film(film,trailer,sinopsis,penghargaan) VALUES('$film','$trailer','$sinopsis','$penghargaan')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function editCast($data)
{
    global $conn;
    $id_tokoh = $data['id_tokoh'];
    $nama_asli = $data['nama_asli'];
    $nama_tokoh = $data['nama_tokoh'];
    $biografi = $data['biografi'];
    $id_film = $data['id_film'];
    $fotoLama = $data['fotoLama'];

    //cek user update foto
    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = uploadFoto();
    } else {
        $foto = $fotoLama;
    }

    $query = "UPDATE pemeran
              SET
              nama_asli = ?,
              nama_tokoh = ?,
              biografi = ?,
              id_film = ?,
              foto = ?
              WHERE id_tokoh = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssssi', $nama_asli, $nama_tokoh, $biografi, $id_film, $foto, $id_tokoh);
    mysqli_stmt_execute($stmt);

    return mysqli_stmt_affected_rows($stmt);
}

function editFilm($data)
{

    global $conn;

    $id_film = $data['id_film'];
    $sinopsis = $data['sinopsis'];
    $penghargaan = $data['penghargaan'];
    $trailer = $data['trailer'];

    //cek apakah ganti nama film
    $film_lama = $data['film_lama'];
    $film = $data['film'];

    if ($film === $film_lama) {
        $film = $film_lama;
    } else {
        $queryUpdatePemeran = "UPDATE pemeran SET film='$film' WHERE film='$film_lama'";
        mysqli_query($conn, $queryUpdatePemeran);
    }

    $query = "UPDATE film
              SET
              film = '$film',
              penghargaan = '$penghargaan',
              sinopsis = '$sinopsis',
              trailer = '$trailer'

              WHERE id_film = $id_film";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}
//method tambahan
function tampilsemua($query)
{
    global $conn;
    $hasil_query = mysqli_query($conn, $query);

    if (!$hasil_query) {
        die('Query Error: ' . mysqli_error($conn));
    }

    $node = [];

    while ($baris = mysqli_fetch_assoc($hasil_query)) {
        $node[] = $baris;
    }

    return $node;
}

function register($data)
{
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $email = strtolower(stripcslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $role = 'user';

    $result = mysqli_query($conn, "SELECT username FROM role WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
        alert('Username sudah terdaftar');
        </script>>
        ";
        return false;
    }

    //cek konfirmasi password
    if ($password != $password2) {
        echo "
        <script>
        alert('Password Tidak Sesuai');
        </script>>
        ";
        return false;
    }

    mysqli_query($conn, "INSERT INTO role(username,email,role,password) VALUES('$username','$email','$role','$password')  ");
    return mysqli_affected_rows($conn);
}

function uploadFoto()
{
    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];

    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "
        <script>
            alert('Gambar belum diupload');
        </script>
        ";
        return false;
    }

    //cek ekstensi
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert('Bukan gambar yang anda upload');
        </script>
        ";
    }

    move_uploaded_file($tmpName, '../foto/' . $namafile);
    return $namafile;
}
