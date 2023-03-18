<?php
session_start();
require('../login/config.php');


if(isset($_POST) && !empty($_POST['id'])){

	   // selectionner image pour effacer    
	   $sql_select = "SELECT * FROM menu WHERE id = ".$_POST['id'];
	   $select_result = $conn->query($sql_select);
	    $row = $select_result->fetch_row();
		


		$sql = "DELETE FROM menu WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Image effacer.';
		header("Location: ../admin/carte.php");
}else{
	$_SESSION['error'] = 'Choisir une image ou un titre';
	header("Location: ../admin/carte.php");
}


?>