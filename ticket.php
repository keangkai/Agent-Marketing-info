<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ticket.php">Ticket</a>
            </li>
            
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Welcome <?php echo $_SESSION['name']?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
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
    
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Ticket</span></h1>
            <p class="lead"></p>
        </div>
    </div>
     <!-- Product grid -->
     <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h4>Special Ticket</h4>
              <img class="img-fluid" src="images/tickets2.png" alt="">
            </a>
            <div class="portfolio-caption">
                <p>$.500.00</p>
                <button style="float:left;" class="btn btn-danger" id="btnAlert" >Buy</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h4>Special Ticket</h4>
              <img class="img-fluid" src="images/tickets2.png" alt="">
            </a>
            <div class="portfolio-caption">
                <p>$.500.00</p>
                <button style="float:left;" class="btn btn-danger" id="btnAlert2" >Buy</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <h4>Special Ticket</h4>
              <img class="img-fluid" src="images/tickets2.png" alt="">
            </a>
            <div class="portfolio-caption">
                <p>$.500.00</p>
                <button style="float:left;" class="btn btn-danger" id="btnAlert3">Buy</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script>
        $('#btnAlert').click(function(e){
            // inputOptions can be an object or Promise
            var inputOptions = new Promise(function(resolve) {
                resolve({
                '500': '500',
                '1000': '1000',
                '1500': '1500'
                });
            });
            swal({
            title: 'Select Price',
            input: 'radio',
            inputOptions: inputOptions,
            inputValidator: function(result) {
                return new Promise(function(resolve, reject) {
                if (result) {
                    resolve();
                } else {
                    reject('You need to select something!');
                }
                });
            }
            }).then(function(result) {
            swal({
                type: 'success',
                html: 'You selected: ' + result
            });
            })

            $(document).on("click",".swal2-container input[name='swal2-radio']", function() {
                var id = $('input[name=swal2-radio]:checked').val();
                console.log('id: ' + id);
            });
        });

        $('#btnAlert2').click(function(e){
            // inputOptions can be an object or Promise
            var inputOptions = new Promise(function(resolve) {
                resolve({
                '500': '500',
                '1000': '1000',
                '1500': '1500'
                });
            });
            swal({
            title: 'Select Price',
            input: 'radio',
            inputOptions: inputOptions,
            inputValidator: function(result) {
                return new Promise(function(resolve, reject) {
                if (result) {
                    resolve();
                } else {
                    reject('You need to select something!');
                }
                });
            }
            }).then(function(result) {
            swal({
                type: 'success',
                html: 'You selected: ' + result
            });
            })

            $(document).on("click",".swal2-container input[name='swal2-radio']", function() {
                var id = $('input[name=swal2-radio]:checked').val();
                console.log('id: ' + id);
            });
        });

        $('#btnAlert3').click(function(e){
            // inputOptions can be an object or Promise
            var inputOptions = new Promise(function(resolve) {
                resolve({
                '500': '500',
                '1000': '1000',
                '1500': '1500'
                });
            });
            swal({
            title: 'Select Price',
            input: 'radio',
            inputOptions: inputOptions,
            inputValidator: function(result) {
                return new Promise(function(resolve, reject) {
                if (result) {
                    resolve();
                } else {
                    reject('You need to select something!');
                }
                });
            }
            }).then(function(result) {
            swal({
                type: 'success',
                html: 'You selected: ' + result
            });
            })

            $(document).on("click",".swal2-container input[name='swal2-radio']", function() {
                var id = $('input[name=swal2-radio]:checked').val();
                console.log('id: ' + id);
            });
        });
    </script>
</body>
</html>