<?php 
    function handleNavbar($value) {
        echo $value;
    };
?>

<nav class="navbar navbar-expand-lg bg-primary {{ isset($_COOKIE['warna']) ? handleNavbar($_COOKIE['warna']) : '' }}" id="{{ isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide' : '' }}">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse navbar-container-auth" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/">Home</a> 
                    <a class="nav-link" href="/my-car">MyCar</a>
                </div>
                <div class="nav-user">
                    <a id="{{ isset(auth()->user()->name) ? 'hide' : '' }}" class="nav-link nav-login" href="/login">Login</a> 
                    <a href="/add-item" class="nav-additem">Add Item</a>
                    <div class="dropdown" id="{{ !isset(auth()->user()->name) ? 'hide' : '' }}">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{isset(auth()->user()->name) ? auth()->user()->name : ''}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Profile</a></li>
                            <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</nav>