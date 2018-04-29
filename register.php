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

<?php 
    include_once('connect.php');
    if (isset($_POST['submit'])){
        // echo $_POST['firstname'].'<br>';
        // echo $_POST['lastname'].'<br>';
        // echo $_POST['username'].'<br>';
        // echo $_POST['password'].'<br>';
        // echo $_FILES['filupload']['name'].'<br>';
        
        // echo 'ชื่อรูปภาพ :'.$_FILES['filupload']['name'].'<br>';
        // echo 'เนิ้อหาไฟล์ :'.$_FILES['filupload']['tmp_name'].'<br>';
        // echo 'ขนาดรูปภาพ :'.$_FILES['filupload']['size'].'<br>';
        // echo 'ชนิดไฟล์ :'.$_FILES['filupload']['type'].'<br>';

        $temp = explode(".",$_FILES['filupload']['name']);
        $newName = round(microtime()).'.'.end($temp);
        //echo $newName;

        if (move_uploaded_file($_FILES['filupload']['tmp_name'], 'uploads/'.$_FILES['filupload']['name'])){

            $sql = "INSERT INTO `member` (`firstname`, `lastname`, `username`, `password`, `picture`) 
                    VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['username']."', '".$_POST['password']."', '".$newName."')";
            $result = $conn->query($sql);  
            
            if ($result){
                echo '<script> alert("Register complete!")</script>';
                header('Refresh:0; url=login.php');
            }else {
                echo 'No';
            }
        }
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-header text-center">
                        Register
                        </div>
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="firstname"  class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="lastname" class="form-control" id="lastname" name="lastname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username"  class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="filUpload" class="col-sm-3 col-form-label">Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="filupload" name="filupload" onchange="readURL(this)">
                                </div>
                            </div>
                        </div>
                        <figure class="figure">
                            <center><img id="imgUpload" class="figure-img img-fluid rounded" ></center>
                        </figure>
                        <div class="card-footer text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script>
    function readURL(input){
        var reader = new FileReader();

        reader.onload = function(e){
            console.log(e.target.result)
            $('#imgUpload').attr('src', e.target.result).width(300)
        }
        reader.readAsDataURL(input.files[0]);
    }
    </script>
</body>
</html>