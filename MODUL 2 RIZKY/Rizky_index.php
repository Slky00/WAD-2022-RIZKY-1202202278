<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Rizky_index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rizky_index.php?page=booking">Booking</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <?php 
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'booking':
                        include "Rizky_booking.php";
                        break;
                    case 'mybooking':
                        include "Rizky_mybooking.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }


            } else if (isset($_GET['car'])) {
                $car = $_GET['car'];

                if(in_array($car, ['rsetrn', 'q8', 'RS6L'])) {
                    include "Rizky_booking.php";
                }
            } else {
                include "Rizky_home.php";
            }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>