<?php
    $conn = mysqli_connect("localhost", "id20942113_ekadarmap", "Mekadp_123", "id20942113_meka");

    mysqli_query($conn,"INSERT INTO pesan(Meja,Nama,Jenis_Menu,Jumlah) VALUES('$_POST[meja]','$_POST[nama]','$_POST[jenis_menu]'
    ,'$_POST[jumlah]')");

?>