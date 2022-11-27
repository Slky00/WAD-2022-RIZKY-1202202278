<?php

 include 'connectorRizky.php';
    $emailU = $_POST['emailU'];
    $user = $_POST['user'];
    $pw = $_POST['pw'];
    $nomor = $_POST['nomor'];
    $cpw = $_POST['cpw'];
    $navbar_color = $_POST['navbar_color'];

    if(!empty($pw) && !empty ($cpw)) {
        if ($pw == $cpw) {
            $query = "UPDATE user_rizky SET nama = '$nama', email = '$emailU', password = '$pw', no_hp = '$nomor' WHERE email = '$emailU'";
            $result = mysqli_query($connects, $query);

            if ($query) {
                setcookie('nama', $nama, time() +85400*60, '/');
                setcookie('email', $emailU, time() +85400*60, '/');
                setcookie('password', $password, time() +85400*60, '/');
                setcookie('no_hp', $nomor, time() +85400*60, '/');
                setcookie('warna', $navbar_color, time() +85400*60, '/');    

                header('Location: ../Rizky_index.php');
            }else {
                echo 'Gagal';
            }
        } else {
            echo 'Password tidak sama';
        
        }
    }