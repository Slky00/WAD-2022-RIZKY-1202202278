<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container" style="margin-top:20px;">
          <div class="row">
          <div class="col-10 " style="margin-top:20px;">
            <h3>My Showroom</h3>
          <p>List Showroom Rizky - 1202202278</p> <br>
  <section id="mobil">
    <?php include_once("config/connect.php");
    $result = mysqli_query($connect, 'SELECT * FROM showroom_rizky_tables');
    if ($result){
      while ($select = mysqli_fetch_array($result)){
    ?>
        <div class="card" style="width: 18rem;">
            <img src="img/<?= $select['foto_mobil']?> " class="card-img-top" alt="mobil">
            <div class="card-body">
                <h5 class="card-title"><?php echo $select['nama_mobil']?></h5>
                <p class="card-text"><?php echo $select ['deskripsi']?></p>
                <div class="row">
                  <div class="col-6">
                  <a href='Rizky_index.php?page=detail&id=<?= $select['id_mobil'] ?>' type="button" class="btn btn-primary col-12">Detail</a>
                  </div><div class="col-6">
                  <a href='config/hapus.php?id=<?php echo $select['id_mobil'] ?>' class="btn btn-primary col-12 bg-danger ">Delete</a>
            </div></div></div>
        </div> 
    <?php
      }
    }
    ?>
    <span class="jumlah_mobil">Jumlah Mobil: <?= mysqli_num_rows($result) ?></span>
    </section>
  </div>

        
        
