<?php include('connectorRizky.php');
    $emailu = $_POST['emailu'];
    $password = $_POST['password'];

    $query=mysqli_query($connects, "SELECT * FROM user_rizky WHERE email ='$emailu' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if($rows){
        $getdata=mysqli_fetch_assoc($query);
        if (isset($_POST['setsave'])){
            $setsave = $_POST['setsave'];
            setcookie('setsave', $setsave, time()+85400*30, '/');
        }

        setcookie('email', $emailu, time()+85400*30, '/');
        setcookie('password', $password, time()+85400*30, '/');
        setcookie('nama', $getdata['nama'], time ()+85400*30,'/');
        header('location: ../Rizky_index.php');

    }else{
        echo "wrong email/password";
    }
    ?>