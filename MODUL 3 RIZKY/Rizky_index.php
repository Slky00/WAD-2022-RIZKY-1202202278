<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            include "config/connect.php";

            $result = mysqli_query($connect, "SELECT * FROM showroom_rizky_tables");
        ?>
     <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="Rizky_index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Rizky_index.php?page=<?php echo mysqli_num_rows($result) ? "mycar" : "additem" ?>">Mycar</a>
                  </li>
                </ul>
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'mycar'){
                    echo '<a href="Rizky_index.php?page=additem"  type="button" class="btn btn-light" >Add Item</a>';
                }
                ?>
              </div>
            </div>
            <div>
            </div>
          </nav>
    </section>

    <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];

            switch ($page) {
                case 'detail':
                    include "Rizky_itemdetail.php";
                    break;
                case 'edit':
                    include "Rizky_edititem.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'mycar':
                    include "Rizky_myitem.php";
                    break;
                case 'additem':
                    include "Rizky_Additem.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else {
            include "Rizky_Home.php";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

