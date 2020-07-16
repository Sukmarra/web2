<?php
include "koneksi.php";
date_default_timezone_set("Asia/Bangkok");
$judul = $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time = date("Y-m-d\\");
$timestamp = strtotime($time);

$lead = str_replace("\r\n", "<br>", $lead);
$query = "INSERT INTO articles(judul,penulis,lead,content,waktu)
 VALUES ('$judul','$penulis','$lead','$isi', now())";

if (mysqli_query($koneksi, $query)) {
    echo "<h3 align=center>Proses Penambahan Artikel Berhasil</h3>";
    echo "<A href=\"tampil_articles.php\">List</A>";
} else {
    echo "<h2 align=center>Proses Penambahan Artikel Gagal</h2>";
    echo $judul;
    echo  mysqli_error($koneksi);
}