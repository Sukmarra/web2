<?php

    $con = mysqli_connect("localhost:3308","root","");
    $dbname="lat_dbase";
    mysqli_select_db($con, $dbname);

    // hapus table
    $delete = mysqli_query($con, "DROP TABLE tbl_mhs") or die ("Tidak Dapat Menghapus Tabel");
    if($delete){
        echo "Table berhasil dihapus <br>";
    }

    // hapus db
    $delete_db = mysqli_query($con, "DROP DATABASE $dbname") or die ("Tidak Dapat Menghapus Database $dbname");
    if($delete_db){
        echo "Database $dbname berhasil dihapus";
    }
    
    // close db
    mysqli_close($con); 
?> 
