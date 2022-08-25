<?php 
	 include("../../config/connection.php");

		$id = $_GET['userId'];

		$sql = "DELETE FROM tblaccount where userid= '$id'";

		$result = mysqli_query($conn,$sql);

		if ($result) {

			header('location: ../users.php');
		}
		

 ?>