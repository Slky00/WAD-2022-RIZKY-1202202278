<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <section id="form">
        <div class="container" style="margin-top:20px;">
        <div class="row">
        <div class="col-10 " style="margin-top:20px;">
          <h3>Tambah Mobil</h3>
          <p>Tambah Mobil Baru Anda Ke List Show Room</p> <br>
    <form class="form1"  action="config/tambah.php" method="post" enctype="multipart/form-data">
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

        <input type="submit" class="btn btn-primary btn-lg" name="selesai" value="Selesai">
        <!-- <div class="col-md-3 mx-auto text-center">
          <button type="button" name="selesai" class="btn btn-primary btn-lg">
            Selesai
          </button>
        </div> -->
  </form>
</section>
