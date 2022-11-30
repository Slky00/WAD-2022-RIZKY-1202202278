<?php include('connectorRizky.php');

$emailu = $_POST['emailu'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];
$confirmpw = $_POST['confirmpw'];

$sql = "INSERT INTO user_rizky (email, nama, no_hp, password) VALUES ('$emailu', '$nama', '$nohp','$password')";
$sql_cek = "SELECT * FROM user_rizky where email = '$emailu'";
$cek = $connects->query($sql_cek);
$rows = mysqli_num_rows($sql_cek);

if($rows) {
    echo "Akun udah ada";
} else {
    if($password == $confirmpw){
        $query = mysqli_query ($connects, "INSERT INTO user_rizky (email, nama, no_hp, password) VALUES ('$emailu', '$nama', '$nohp','$password')");

        if($query) {
            setcokie('nama', $nama, time() +85400*60, '/');
            setcokie('email', $emailu, time() +85400*60, '/');
            setcokie('password', $password, time() +85400*60, '/');
            setcokie('no_hp', $nohp, time() +85400*60, '/');
            header("Location: ../Rizky_index.php?page=login");
        }
    } else {
        echo "Password salah";
    }
}

?>