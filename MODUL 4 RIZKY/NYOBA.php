<?php
$navbar_color = '#0d6efd';

if ($_POST) {
    $navbar_color = $_POST['navbar_color'];
} 
else {
    if (isset($_COOKIE['background-color'])) {
        $_POST['navbar_color'] = $_COOKIE['background-color'];
    }
}

$massage = false;
if (isset($_POST['delete_cookie']) ) {
    setcookie('background-color','',0,'/');
    $message = 'Setting Navbar berhasil dihapus';
}

$message = false;
if (isset($_POST['remember'])) {
    setcookie ('background-color', $_POST['navbar_color'], strtotime('+7 days'),'/');
    $message = 'Setting Navbar berhasil disimpan';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js%22%3E" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    body {
        background-color: <?= $navbar_color ?>;
    }
</style>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 my-auto">
                <form action="" method="post">
                    <div class="card">
                        <span class="card-header">
                            <b>Navbar Setting</b>
                        </span>
                        <div class="card-body">
                            <?php
                                if ($message) {
                                    echo '<div class="alert alert-primary alert-dismissible fade show">' . $message . '</div>';
                                }
                            ?>
                            
                            <div class="background">
                                <select name="navbar_color" class="form-control", id="">
                                    <?php
                                        $colors = array('#4e79a0' => 'Biru', '#75b14a' => 'Hijau' , '#d06353' => 'Merah');
                                        foreach ($colors as $name => $value) {
                                            $selected = $name == @$_POST['navbar_color'] ? 'SELECTED="SELECTED"' : '';
                                            echo '<option value= "' .$name . '"' . $selected . '>' . $value . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="from-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                    <label for ="remember" class="form-check-label">Remember</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="from-check">
                                    <input type="submit" class="btn btn-success" name="submit" id="simpan">
                                    <input for="submit" class="btn btn-danger" name="delete_cookie" value="delete_cookie">Remember</input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
