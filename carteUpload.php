
<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'ecf');

	// initialize variables
	$category = "category";
	$title = "title";
	$description = "description";
	$price = "price";
	$id = "id";

	if (isset($_POST['save'])) {
		$category = $_POST['category'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$id = $_POST['id'];

		mysqli_query($conn, "INSERT INTO menu (id, category, title, description, price) VALUES ('$id' ,'$category', '$title', '$description', '$price')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: carte.php');
	}

?>
