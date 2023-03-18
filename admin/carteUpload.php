<?php
session_start();
require('../login/config.php');

if(isset($_POST['submit'])){

    $category = $_POST['category'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

	
    $select = " SELECT * FROM menu WHERE title = '$title'";

    $result = mysqli_query($conn, $select); 
	
	if(mysqli_num_rows($result) > 0){

	$insert = "INSERT INTO menu(category, title, description, price) VALUES('$category','$title','$description','$price')";
	mysqli_query($conn, $insert);
	header('location:carte.php');
    

	if($result)
	{
		$_SESSION['success'] = 'Carte téléchargée avec succès.';
		header("Location: ./carte.php"); // redirection

	}
	else{
		$_SESSION['error'] = 'carte a échoué';
		header("Location: ./carte.php");
	}
	};

};

?>
