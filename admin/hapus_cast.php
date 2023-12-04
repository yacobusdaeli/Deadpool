<?php
require '../method.php';
$id = $_GET['id_tokoh'];

$query = "DELETE FROM pemeran WHERE id_tokoh=$id";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) == 1) {
    echo "
<script>
alert('data berhasil dihapus');
document.location.href='data_castadmin.php';
</script>
    ";
    exit();
} else {
    echo "
<script>
alert('data gagal dihapus');
document.location.href='data_castadmin.php';
</script>
    ";
    exit();
}
