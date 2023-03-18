<?php
session_start();
require('../login/config.php');


if(isset($_POST) && !empty($_POST['id'])){

	   // selectionner image pour effacer    
	   $sql_select = "SELECT image FROM images WHERE id = ".$_POST['id'];
	   $select_result = $conn->query($sql_select);
	    $row = $select_result->fetch_row();
		$image_name = $row[0];

		// code pour retirer la photo du fichier uploads 
		$unl = unlink("../uploads/".$image_name);

		$sql = "DELETE FROM images WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Image Effacer';
		header("Location: ../admin/gallery.php");
}else{
	$_SESSION['error'] = 'Choisir une image ou mettre un titre';
	header("Location: ../admin/gallery.php");
}


?>