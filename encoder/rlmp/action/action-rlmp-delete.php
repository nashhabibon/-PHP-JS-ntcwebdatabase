<?php 
	 include("../../../config/connection.php");


		$id = $_GET['tblID'];

		$sql = "DELETE FROM tblrlmplicenseinfo where tblID= '$id'";

		$result = mysqli_query($conn,$sql);

		if ($result) {

			 echo json_encode(array("statusCode"=>1));   

		}
		

 ?>