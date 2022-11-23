<?php 

        include 'comect.php';

        $namamobil = $_POST['namamobil'];
        $namaorg = $_POST['namaorg'];
        $merek = $_POST['merek'];
        $date = $_POST['tglbeli'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $statuss = $_POST['statuss'];

        move_uploaded_file($file_tmp, '../img/'.$gambar);

        // query insert
        $query = mysqli_query($connect, "INSERT showroom_rizky_tables(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
        VALUES ('$namamobil', '$namaorg', '$merek', '$date', '$deskripsi', '$gambar', '$statuss')");

        if($query) {
            header('Location: ../Rizky_index.php?page=mycar');
        }
?>