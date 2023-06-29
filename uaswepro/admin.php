<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tab, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    .table{
        border-collapse: collapse;
        font-size: 20px;
        border:1px solid #cccccc;
        margin-top: 20px
    }
    td{
        padding:3px;
        height: 25px;
    }
    .col{
        background-color:steelblue;
        color:white;
        height:30px;
    }
    h1{
        margin-top:30px;
        text-align:center;
    }
</style>
<body>

    <?php include "koneksi.php";
    $data = mysqli_query($cnn, "select * from tb_user");?>
    <div class="container">
        <table class="table">
            <h1>Saran dari user</h1>
                <thead>
                    <tr class="col">
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Saran</th>
                    <th scope="col" colspan="1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($cnn,"select * from tb_user");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[email]</td>
            <td>$tampil[saran]</td>
            <td><a href='?kode=$tampil[id]' class='btn btn-sm btn-danger'> Hapus </a></td>
            
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($cnn,"delete  from tb_user where id='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='admin.php'>";

    }
    ?>
 
        
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if IE]>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>