<?php
include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah = "DELETE FROM articles WHERE articleID =\"$articleID\"";
if (mysqli_query($koneksi, $perintah)) {
    echo "Artikel Berhasil Dihapus<br>";
    echo "<a href=\"tampil_articles.php\">Back</a>";
} else {
    echo "Komentar Gagal Dihapus. Kemungkinan Terjadi Kegagalan Koneksi
 Ke Database MySQL.";
}