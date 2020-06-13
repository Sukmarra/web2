<!DOCTYPE html>
<html lang="en">
<head>
<title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
    Kapal Asing, Silakan identifikasikan diri Anda! <br> 
    <?php

        $namaDepan = "Law";
        $namaTengah = "Liet";
        $namaBelakang =  "El";
        $nilaiSatu = 25;
        $nilaiDua = 50;
        $hasil = $nilaiSatu*$nilaiDua;
        $a = 2;
        $b = 3;
        $hasil = pow($a,$b);

    ?>

    <b>Ini adalah kapal Federasi Planet USS Enterprise.<br>

    <?php

        echo "Saya $namaBelakang, $namaDepan $namaTengah $namaBelakang, Kapten Kapal. </b><br>";
        echo "$nilaiSatu x $nilaiDua = $hasil<br>";
        echo "$a pangkat $b = $hasil";

    ?>

</body>
</html>