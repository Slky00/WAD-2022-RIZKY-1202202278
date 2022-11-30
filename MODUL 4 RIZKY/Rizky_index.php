<?php
$navbar_color = '#0d6efd';

if ($_POST) {
    $navbar_color = $_POST['navbar_color'];
} 
else {
    if (isset($_SESSION['navbar-color'])) {
        $_POST['navbar_color'] = $_COOKIE['navbar-color'];
    }
}

$massage = false;
if (isset($_POST['delete_cookie']) ) {
    setcookie('navbar-color','',0,'/');
    $message = 'Setting Navbar berhasil dihapus';
}

$message = false;
if (isset($_POST['remember'])) {
    setcookie ('navbar-color', $_POST['navbar_color'], strtotime('+7 days'),'/');
    $message = 'Setting Navbar berhasil disimpan';
}
?>

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
        <nav class="navbar navbar-expand-lg bg-<?= isset($_COOKIE['warna']) ? $_COOKIE['warna'] : 'primary' ?>">
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
              </div>
                
              <?php
                if(isset($_GET['page']) && $_GET['page'] == 'mycar'){
                    echo '<a href="Rizky_index.php?page=additem"  type="button" class="btn btn-light" >Add Item</a>';
                }
                ?>
                <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                    <a class="btn btn-light dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_COOKIE['nama']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Rizky_index.php?page=profile">Profile</a></li>
                        <li><a class="dropdown-item" href="Rizky_index.php?page=logout">Log Out</a></li>
                    </ul>
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
                case 'register':
                    include "Rizky_Register.php";
                    break;
                case 'login':
                    include "Rizky_Login.php";
                    break;
                case 'logout':
                    include "config/logout.php";
                    break;
                case 'profile':
                    include "Rizky_Profile.php";
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>

