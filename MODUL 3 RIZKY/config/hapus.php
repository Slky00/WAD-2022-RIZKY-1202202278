<?php
include 'connect.php';
$id = $_GET['id'];
$img = mysqli_query($connect, "SELECT foto_mobil FROM showroom_rizky_tables WHERE id_mobil = $id");
$row = mysqli_fetch_assoc($img);
unlink("../img/".$row['foto_mobil']);
$query = "DELETE FROM showroom_rizky_tables WHERE id_mobil = $id";
$result = mysqli_query($connect, $query);
header('Location:Rizky_index.php');
?>