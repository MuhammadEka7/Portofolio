<?php

    $conn = mysqli_connect("localhost", "id20942113_ekasurya", "Ekadarma#123", "id20942113_ekasurya");


    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $kotak = [];
        while ($baju = mysqli_fetch_assoc($result)) {
            $kotak[] = $baju;
        }
        return $kotak;
    }

    function tambahData($data){
        global $conn;
        $Meja = htmlspecialchars($data["meja"]);
        $Nama = htmlspecialchars($data["nama"]);
        $jenis_Menu = htmlspecialchars($data["jenis_Menu"]);
        $jumlah = htmlspecialchars($data["jumlah"]);
        
        $query = "INSERT INTO pesan VALUES
        ('', '$meja', '$nama', '$jenis_menu', '$jumlah')";
        
        mysqli_query($conn,$query);
        
        return mysqli_affected_rows($conn);
    }
    
?>