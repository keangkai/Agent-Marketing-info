<?php
include 'connect.php';

if (isset($_POST['send'])) {

	$name = htmlspecialchars($_POST['task']);

	$sql = "insert into tasks (name) values ('$name')";

	$val = $conn->query($sql);

	if ($val) {

		header('location: news.php');
	} else {

		echo "error";
	}
}

?>