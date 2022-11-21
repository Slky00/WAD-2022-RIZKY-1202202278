<?php include('config.php');

$id = 1;
$query = mysqli_query($connect,"SELECT *FROM showroom_rizky_table WHERE id = '$id'");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<body>
  <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="Rizky_Home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Rizky_myitem.php">Mycar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        
        <div class="container" style="margin-top:20px;">
        <div class="row">
        <div class="col-10 " style="margin-top:20px;">
          <h3>Edit</h3>
          <p>Edit Mobil RS6</p> <br>

        <div class="container">
        <div class="row card-container">
        <div class="col booking-img-box">
            <img src="<?php echo isset($_GET['car']) ? $_GET['car'] : "RS6L" ?>.png" alt="car" class="booking-img">
        </div>
        <?php if($query){
            while($data = mysqli_fetch_assoc($query)){?>
            <form action="#" method="POST">}
        <div class="col">
            <form action="Rizky_index.php?page=mybooking" method="POST" class="booking-form">
            <div class="mb-3">
                <label for="namamobil" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="namamobil" name="namamobil" placeholder="Audi RS 6" >
            </div>

            <div class="mb-3">
                    <label for="namaorg" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="namaorg" name="namaorg" placeholder="RIZKY - 1202202278">
            </div>

            <div class="mb-3">
                    <label for="merek" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merek" name="merek" placeholder="Audi">
            </div>

            <div class="mb-3">
                    <label for="tglbeli" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="tglbeli" name="tglbeli" >
            </div>

            <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="email" class="form-control" id="exampleInputEmail1" placeholder ="mobilnya begini begitu" name='deskripsi'></textarea>
            </div>

            <div class="mb-3">
                    <label class="form-label" for="customFile">Foto</label>
                    <input type="file" class="form-control" id="customFile" name="gambar" />
            </div>

            <label for="numberhp" class="form-label">Status Pembayaran</label>

            <div class="mb-3">
                
                    <input class="form-check-input" type="radio" name="statuss" id="flexRadioDefault1" value="lunas">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="statuss" id="flexRadioDefault2" value="belum lunas">
                <label class="form-check-label" for="flexRadioDefault2">
                    Belum Lunas
                </label>
            </div>

            <div class="col-md-3 mx-auto text-center">
            <a href  type="button" class="btn btn-primary btn-lg">Selesai</a>
            </div>
            <?php }
                }

            if(isset($_POST['ubah'])){
                $id = $id;
                $namamobil = $_POST['namamobil'];
                $namaorg = $_POST['namaorg'];
                $merek = $_POST['merek'];
                $date = $_POST['date'];
                $deskripsi = $_POST['deskripsi'];
                $foto = $_POST['foto'];
                $statuss = $_POST['statuss'];
                mysqli_query($connect, "UPDATE showroom_rizky_table SET nama='$nama', email=''where id='$id'");
                header("Location: Rizky_itemdetail.php");
            }
            ?>