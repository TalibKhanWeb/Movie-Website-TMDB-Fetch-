<?php 	
include 'db.php';
if ($_GET['id']) {
	$id = $_GET['id'];
	$query = "DELETE FROM `request` WHERE id = $id";
	$run = mysqli_query($conn,$query);
	if ($run) {
		header('location:request.php');
	}else{
		echo "Error in Query";
	}

}
else{
	header('location:request.php');
}

 ?>