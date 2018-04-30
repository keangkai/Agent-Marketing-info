<?php session_start();?>
<?php include 'connect.php';

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "select * from tasks limit " . $start . " , " . $perPage . " ";
$total = $conn->query("select * from tasks")->num_rows;
$pages = ceil($total / $perPage);

$rows = $conn->query($sql);

?>
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ticket.php">Promotion</a>
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
            <h1 class="display-4">News</span></h1>
            <p class="lead">News about promotion and gift voucher etc.</p>
        </div>
    </div>
    <!-- content -->
    <div class="card-body" style="margin-top: 70px;">
	<div class="col-md-10 col-md-offset-1" >
		<table class="table">
			<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success ">Add </button>
            &nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
			<hr><br>
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
                            <h4 class="modal-title">Add</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form method="post" action="add.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Description</label>
									<input type="text" required name="task" class="form-control">

								</div>
								<input type="submit" name="send" value="Add" class="btn btn-success">
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-12 text-center">
			<p>Search</p>
			<form action="search.php" method="post" class="form-group">

				<input type="text" placeholder="Search"
				 name="search" class="form-control">
			</form>
		</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID.</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php while ($row = $rows->fetch_assoc()): ?>
						<th><?php echo $row['id'] ?></th>
						<td class="col-md-10"><?php echo $row['name'] ?> </td>
						<td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a> </td>
		                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
					</tr>
						<?php endwhile;?>

				</tbody>
			</table>
			<center>
				<ul class="pagination">
				<?php for ($i = 1; $i <= $pages; $i++): ?>
				<li><a href="?page=<?php echo $i; ?>&per-page=<?php echo $perPage; ?>"><?php echo $i; ?></a></li>

			<?php endfor;?>
				</ul>
			</center>
		<center>
		</div>
	</div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>