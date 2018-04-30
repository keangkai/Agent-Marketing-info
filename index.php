<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Agent&Marketing</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo.png"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ticket.php">Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
            </li>
            
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Welcome <?php echo $_SESSION['name']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
            <?php }else { ?>
            <li class="nav-item">
                <a class="btn btn-warning" href="register.php">Register</a>
                <a class="btn btn-primary " href="login.php">Login</a>
            </li>
            <?php } ?>
        </ul>
        </div>
    </div>
    </nav>
    <!-- end nav bar -->

    <!-- carodel -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1500467525088-aafe28c0a95e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1ee7e175880a6a44b5d54c4652d1dafd&auto=format&fit=crop&w=1108&h=400&q=80" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1457140072488-87e5ffde2d77?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=59ca8415c73573ea7208eed8df8e227e&auto=format&fit=crop&w=1050&h=400&q=80" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1501808723803-f10b401a67a1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=27d5f233c5cc1455cc4af9b1874e3b6a&auto=format&fit=crop&w=1104&h=400&q=80" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- end carodel -->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Welcome to The Million Years Stone Park</h1>
            <p class="lead">Located on an over-70-acre piece of land just 15 minutes' drive from Pattaya, this Park & Farm is a new striking tourist attraction created with more than 20 years' efforts, for all nature lovers.</p>
            <p class="lead">It contains much more than what its name suggests. It is not only a living museum of curious and beautiful things of all the three kingdoms-animal, vegetable and mineral, but it also offers you several kinds of amusing and exciting shows.

</p>
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>