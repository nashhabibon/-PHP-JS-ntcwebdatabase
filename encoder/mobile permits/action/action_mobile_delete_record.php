<?php 
	 include("../../../config/connection.php");


		$id = $_GET['Record_Id'];

		$sql = "DELETE FROM tblmobile_permit_records where Record_Id= '$id'";

		$result = mysqli_query($conn,$sql);

		if ($result) {

			  echo json_encode(array("statusCode"=>1));
		}
		

 ?>