<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'ecf');

	// initialize variables
	$title = "title";
	$day = "day";
	$hour_start = "hour_start";
	$hour_end = "hour_end";
	$id = "id";

	if (isset($_POST['save'])) {
		$day = $_POST['day'];
		$title = $_POST['title'];
		$hour_start = $_POST['hour_start'];
		$hour_end = $_POST['hour_end'];
		$id = $_POST['id'];

		mysqli_query($conn, "INSERT INTO menu (id, title, day, hour_start, hour_end) VALUES ('$id' ,'$title', '$day', '$hour_start', '$hour_end')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: hours.php');
	}

?>
