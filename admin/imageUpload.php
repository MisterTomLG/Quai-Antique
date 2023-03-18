<?php

session_start();
require('../login/config.php');

if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){

	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name']; // importer images dans dossier photo


	if(move_uploaded_file($tmp, '../uploads/'.$image_name)){

		$sql = "INSERT INTO images (title, image) VALUES ('".$_POST['title']."', '".$image_name."')";

		$result = $conn->query($sql);

        if($result)
        {
        	$_SESSION['success'] = 'Image téléchargée avec succès.';
		    header("Location: ./gallery.php"); // redirection

        }
        else{
        	$_SESSION['error'] = 'téléchargement a échoué';
		    header("Location: ./gallery.php");
        }
	}else{
		$_SESSION['error'] = 'téléchargement a échoué';
		header("Location: ./gallery.php");
	}
}else{
	$_SESSION['error'] = 'Veuillez sélectionner une image ou écrire le titre';
	header("Location: ./gallery.php");
}

?>
