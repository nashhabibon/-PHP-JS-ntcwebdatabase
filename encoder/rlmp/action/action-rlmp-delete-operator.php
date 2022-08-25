<?php 
	 include("../../../config/connection.php");


		$id = $_GET['IDno'];

		$sql = "DELETE FROM tblrlmplicenseinfo where IDno= '$id'";
		$sql2 = "DELETE FROM tblrlmpoperatorinfo where IDno= '$id'";

		$result = mysqli_query($conn,$sql);
		$result = mysqli_query($conn,$sql2);

		if ($result) {

			 header('location: ../rlmp-dashboard.php');
		}
		

 ?>