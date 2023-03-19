<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'ecf');

	// initialize variables
	$category = "category";
	$meal = "meal";
	$dessert = "dessert";
    $drink = "drink";
	$price = "price";
	$id = "id";

	if (isset($_POST['save'])) {
		$category = $_POST['category'];
		$meal = $_POST['meal'];
		$dessert = $_POST['dessert'];
		$drink = $_POST['drink'];
		$price = $_POST['price'];
        $id = $_POST['id'];

		mysqli_query($conn, "INSERT INTO daily_menu (id, category, meal, dessert, drink, price) VALUES ('$id' ,'$category', '$meal', '$dessert','$drink', '$price')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: menu.php');
	}

?>
