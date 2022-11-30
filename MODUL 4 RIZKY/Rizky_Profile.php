<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    </head>

<body>

<?php 
include 'config/connectorRizky.php';

    $email = $_COOKIE['email'];
    $query = mysqli_query($connects, "SELECT * FROM user_rizky WHERE email = '$email'");
    $data = mysqli_fetch_assoc($query);
?>

    <form action="config/Edit_Profile.php" method="post">
    <div class="container" style="margin-top:20px;">
        <div class="row">
        <div class="col-10 " style="margin-top:20px;">
          <h3 class="mb-5 text-center">Profile</h3>
        <div class="form-group mb-3 wit row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="emailU" value="<?=$email?>">
            </div>
        </div>
        <div class="form-group mb-3 wit row">
            <label for="profilename" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="profilename" name="user" value="<?=$data['nama']?>">
            </div>
        </div>
        <div class="form-group mb-4 wit row">
            <label for="profileno" class="col-sm-2 col-form-label">No Handphone</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="profileno" name="nomor" value="<?=$data['no_hp']?>">
            </div>
        </div>

        <hr class="mb-4"></hr>
        
        <div class="form-group mb-3 wit row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" name="pw" value="<?=$data['password']?>">
            </div>
        </div>

        <div class="form-group mt-3 wit row">
            <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="confirmpassword" name="cpw" value="<?=$data['password']?>">
            </div>
        </div>

        <div class="form-group mt-3 wit row">
            <label for="car" class="col-sm-2 col-form-label">Warna Navbar</label>
            <div class="col-sm-10">
            <select class="form-select" name="navbar_color"  id="colour">
                <option selected disabled></option>
                <option value="primary">Blue</option>
                <option value="warning" >Yellow</option>
                <option value="info">Cyan</option>
            </select>
            
        </div>
        <div class="form-group">
        <div class="from-check text-center pt-5 mb-5">
            <input type="submit" class="btn btn-primary" Value="Update" name="Update" id="simpan" >
        </div>
        </div>
    </div>
    </form>
</body>
<footer>
    <section>
        <div class="row pt-4">
            <div class="col-2">
              <img src="img/logo-ead.png" alt="" width=100px>
            </div>
            <div class="col-9">
              <p class="text-secondary">RIZKY_1202202278</p>
            </div>
        </div>
    </section>
</footer>