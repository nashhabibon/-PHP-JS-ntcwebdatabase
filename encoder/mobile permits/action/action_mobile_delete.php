<?php 
	 include("../../../config/connection.php");


		$id = $_GET['fileNo'];

		$sql = "DELETE FROM tblmobile_permit_records where fileNo= '$id'";
		$sql2 = "DELETE FROM tblmobile_permit where fileNo= '$id'";

		$result = mysqli_query($conn,$sql);
		$result = mysqli_query($conn,$sql2);

		if ($result) {

			header('location: ../mobile-permits.php');
		}
		

 ?>