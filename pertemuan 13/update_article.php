<?
include "koneksi.php";
$judul = $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$ID = $_POST['ID'];
$time=date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$judul', penulis='$penulis',
lead='$lead',
content='$isi', waktu=now() WHERE articleID ='$ID'";
if (mysqli_query($koneksi, $update)) {
 echo "Artikel berhasil di update<br>";
 echo "<a href=\"tampil_articles.php\">List</a>";
} else {
 echo "Artikel gagal di update";
}
?>