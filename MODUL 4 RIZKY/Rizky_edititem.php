<?php 
  include 'config/connect.php';
  $id = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM showroom_rizky_tables WHERE id_mobil='$id'");
  $select = mysqli_fetch_assoc($query);
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
        <div class="container" style="margin-top:20px;">
        <div class="row">
        <div class="col-10 " style="margin-top:20px;">
          <h3>Edit</h3>
          <p>Edit Mobil RS6</p> <br>

        <div class="container">
        <div class="row card-container">
        <div class="col booking-img-box">
            <img style="width:500px" src="img/<?= $select['foto_mobil'] ?>" alt="car" class="booking-img">
        </div>
            <div class="col">
            <form action="config/edit.php"  method="POST" enctype="multipart/form-data" class="booking-form">
              <div class="mb-3">
                  <label for="namamobil" class="form-label">Nama Mobil</label>
                  <input type="text" class="form-control" id="namamobil" name="namamobil" placeholder="Audi RS 6" value=<?= $select['nama_mobil'] ?> >
              </div>
  
              <div class="mb-3">
                      <label for="namaorg" class="form-label">Nama Pemilik</label>
                      <input type="text" class="form-control" id="namaorg" name="namaorg" value=<?= $select['pemilik_mobil'] ?> placeholder="RIZKY - 1202202278">
              </div>
  
              <div class="mb-3">
                      <label for="merek" class="form-label">Merk</label>
                      <input type="text" class="form-control" id="merek" name="merek" value=<?= $select['merk_mobil']?> placeholder="Audi">
              </div>
  
              <div class="mb-3">
                      <label for="tglbeli" class="form-label">Tanggal Beli</label>
                      <input type="date" class="form-control" id="tglbeli" name="tglbeli" value=<?= $select['tanggal_beli']?> >
              </div>
  
              <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <textarea type="email" class="form-control" id="exampleInputEmail1" placeholder ="mobilnya begini begitu" name='deskripsi'><?= $select['deskripsi']?></textarea>
              </div>
  
              <div class="mb-3">
                      <label class="form-label" for="customFile">Foto</label>
                      <input type="file" class="form-control" id="customFile" name="gambar" />
              </div>
  
              <label for="numberhp" class="form-label">Status Pembayaran</label>
  
              <div class="mb-3">
                  
                      <input class="form-check-input" type="radio" name="statuss" id="flexRadioDefault1" value="lunas" <?php echo $select['status_pembayaran'] == 'lunas' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                          Lunas
                      </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="statuss" id="flexRadioDefault2" value="belum lunas" <?php echo $select['status_pembayaran'] == 'belum lunas' ? 'checked' : '' ?>>
                  <label class="form-check-label" for="flexRadioDefault2">
                      Belum Lunas
                  </label>
              </div>
  
              <div class="col-md-3 text-center">
                <input type="submit" name="edit" class="btn btn-primary btn-lg" value="Simpan">
                <input type="hidden" name="id" value="<?= $select['id_mobil'] ?>">
              </div>
            </form>