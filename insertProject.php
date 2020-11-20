<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$text_zaprosa_vstavit = "INSERT INTO projects (tittle, description, goal, img, user, place) VALUES ('" . $_POST["tittle"] . "','" . $_POST["description"] . "', '" . $_POST["goal"] . "', '" . $_POST["img"] . "', '" . $_POST["user"] . "', '" . $_POST["place"] . "')";
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header("Location: acc.php");
 ?>