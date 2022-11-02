<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $bokdate = isset($_POST['bokdate']) ? $_POST['bokdate'] : '';
    $jam = isset($_POST['jam']) ? $_POST['jam'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : 0;
    $checkout = date("Y-m-d", strtotime("+$number days", strtotime($bokdate)));
    $car = isset($_POST['car']) ? $_POST['car'] : '';
    $numberhp = isset($_POST['numberhp']) ? $_POST['numberhp'] : '';
    $health = isset($_POST['health']) ? $_POST['health'] : NULL;
    $driver = isset($_POST['driver']) ? $_POST['driver'] : NULL;
    $fuel = isset($_POST['fuel']) ? $_POST['fuel'] : NULL;
    $services = array();
    $harga_service = array();
    $total=0;
    
    if(isset($health)){
      array_push($harga_service,25000);
      array_push($services,$_POST['health']);
      } if(isset($driver)) {
        array_push($harga_service,100000);
        array_push($services,$_POST['driver']);
      } if(isset($fuel)) {
        array_push($harga_service,250000);
        array_push($services,$_POST['fuel']);}


    switch($car){
      case 'E-Tron':
        $total= $number * 800000;
        break;
      case 'Q8':
        $total= $number * 700000;
        break;
      case 'RS6':
        $total= $number * 1000000;
        break;
    };
    foreach($harga_service as $price){
      $total += $price;
    }
    ?>




    <div class="container">
        <h2 class="text-center">Thank You RIZKY_1202202278 for Reserving</h2>
        <h5 class="text-center">Please Double check your reservation details</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No Booking</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Service Tambahan</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><?php echo (rand(100000,1000000)) ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $bokdate ?> <?php echo $jam ?></td>
                    <td><?php echo $checkout ?> <?php echo $jam ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $numberhp ?></td>
                    <td>
                    <?php if (empty($services)) {
                      echo "No Service";
                    } else { ?>
                      <ul>
                        <?php foreach($services as $service) { ?>
                          <li><?= $service; ?></li>
                        <?php } ?>
                      </ul>
                    <?php }?>  
                  </td>
                  <td><?= "Rp", number_format($total, 0, ",", "."); ?></td>
                    
                </tr>
            </tbody>
        </table>
        <div class="mb-3">
        <div class="d-flex justify-content-center">
            <a href="Rizky_index.php" class="btn btn-outline-primary w-50" >Kembali</a>
            </div>
        </div>
        </div>
</body>
</html>