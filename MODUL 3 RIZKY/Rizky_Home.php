<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-5 ms-3" style="margin-top:100px;">
          <h1>Selamat Datang di show room Rizky</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio iure perferendis earum laborum exercitationem</p>
          <div class="d-grid gap-1 col-3">
          <a href="<?php
                  include 'config/connect.php';

                  $query = "SELECT * FROM showroom_rizky_table";
                  $results = mysqli_query($conn, $query);

                  if (mysqli_num_rows($results) > 0) {
                     echo 'Rizky_index.php?page=myitem';
                  } else {
                     echo 'Rizky_index.php?page=additem';
                  }
                  ?>">
            <a class="btn bg-primary text-white mt-3">MyCar</a>
          </a>
          </div><br><br>
          <div class="row">
            <div class="col-3">
              <img src="img/logo-ead.png" alt="" width=100px>
            </div>
            <div class="col-9">
              <p class="text-secondary">RIZKY_1202202278</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <img style="margin-top:50px;" src="https://i.pinimg.com/564x/12/d0/8a/12d08a1ddcd6bdfed4fc0d22317a1bc2.jpg" alt="">
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
