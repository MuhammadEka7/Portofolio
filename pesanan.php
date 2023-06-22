<?php

    $conn = mysqli_connect("localhost", "id20942113_ekadarmap", "Mekadp_123", "iid20942113_meka");

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pesanan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th width="50px">Meja</th>
                        <th>Nama</th>
                        <th>Jenis_Menu</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    $tampil = mysqli_query($conn,"SELECT * FROM pesan");
                    while($r=mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $r['Nama']; ?></td>
                            <td><?php echo $r['Jenis_Menu']; ?></td>
                            <td><?php echo $r['Jumlah']; ?></td>
                            <td>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>