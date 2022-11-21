
<?php
include 'connect.php';
$id = $_POST['id'];
$namamobil = $_POST['namamobil'];
$namaorg = $_POST['namaorg'];
$merek = $_POST['merek'];
$date = $_POST['tglbeli'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$statuss = $_POST['statuss'];

if ($file_tmp){
    move_uploaded_file($file_tmp, '../img/'.$gambar);
    $query = "UPDATE showroom_rizky_tables SET namamobil = '$namamobil', namaorg = '$namaorg', merek = '$merek', tglbeli = '$date', deskripsi = '$deskripsi', gambar = '$gambar', statuss = '$statuss' WHERE id_mobil = '$id'";
    $result = mysqli_query($connect, $query);} 
    else {
    $query = "UPDATE showroom_rizky_tables SET namamobil = '$namamobil', namaorg = '$namaorg', merek = '$merek', tglbeli = '$date', deskripsi = '$deskripsi', gambar = '$gambar', statuss = '$statuss' WHERE id_mobil = '$id'";
    $result = mysqli_query($connect, $query);}
header('Location : Rizky_index.php?page=Rizky_Myitem');
?>