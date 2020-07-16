<?php

    // koneksi ke database
    $con = mysqli_connect("localhost:3308","root","");
    $dbname="artikel_db";

    // membuat table
    $cek = mysqli_query($con, "CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");
    if($cek){
        echo "Database $dbname berhasil dibuat <br>";
    }

    mysqli_select_db($con, "artikel_db");

    //membuat tabel
    $sql = "CREATE TABLE articles
    (
        articleID int(10),
        judul varchar(100),
        penulis varchar(100),
        lead varchar(255),
        content text,
        waktu date
    )";
    $create = mysqli_query($con, $sql) or die ("Tidak Dapat Membuat Tabel");
    if($create){
        echo "Tabel Berhasil dibuat";
    }
    
    // close db
    mysqli_close($con); 
?> 