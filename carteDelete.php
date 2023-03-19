<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'ecf');

	// initialize variables
	$category = "category";
	$title = "title";
	$description = "description";
	$price = "price";
	$id = "id";

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM menu WHERE id=$id");
		$_SESSION['message'] = "Menu effacer!"; 
		header('location: carte.php');
	}
?>