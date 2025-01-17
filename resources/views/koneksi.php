<?php
    $koneksi=mysqli_connect(
        "localhost",
        "root",
        "",
        "upload"
    );
    if(mysqli_connect_errno())
    {
        echo "koneksi gagal".mysqli_connect_error();
    }
    else
    {
        echo "koneksi berhasil";
    }
?>