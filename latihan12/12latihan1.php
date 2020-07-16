<?php

    $link = mysqli_connect("localhost:3308", "root", "", "lat_dbase"); 

    if($link === false){ 
        die("ERROR: Tidak dapat tersambung. " 
                    . mysqli_connect_error()); 
    } 

    // sql update db
    $sql = "UPDATE tbl_mhs SET FirstName='Ilham',LastName='Nugraha',Age=21 WHERE mhsID=3"; 

    // pengecekan sql
    if(mysqli_query($link, $sql)){ 
        echo "Berhasil diperbarui."; 
    } else { 
        echo "ERROR: Tidak dapat mengeksekusi $sql. " 
                                . mysqli_error($link); 
    } 

    // close sql
    mysqli_close($link); 

?> 