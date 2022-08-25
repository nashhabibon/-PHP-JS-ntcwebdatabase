<?php
// Start the session
   include("../../config/session.php")


               
?>
<?php

 				include("../../config/connection.php");
  				$sql = "SELECT MAX(IDno) as no FROM tblrlmpoperatorinfo";
                $sqlmax  = mysqli_query($conn, $sql);
                $rowmax = mysqli_fetch_array($sqlmax);
             	$id = $rowmax['no'] + 1;	


             	 $IDno = $_GET['IDno'];

                $query = "SELECT * FROM tblrlmpoperatorinfo WHERE IDno ='$IDno'";
                $query_run = mysqli_query($conn, $query);
                $row= mysqli_fetch_array($query_run);

                $sqlMAX = "SELECT MAX(tblID) as id FROM tblrlmplicenseinfo WHERE IDno = '$IDno'";
               	$sqlmaxquery = mysqli_query($conn, $sqlMAX);
               	$row2 = mysqli_fetch_array($sqlmaxquery);
               	$idmax = $row2['id'];
               		
               	$query2 = "SELECT * FROM tblrlmplicenseinfo WHERE tblID = '$idmax'";
               	$query_run2 = mysqli_query($conn, $query2);
                $row3= mysqli_fetch_array($query_run2);
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>National Telecommunications Commission</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../../src/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../src/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../src/styles/style.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/responsive.bootstrap4.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../../src/js-ajax/ajax.js"></script>

</head>
<body>

	<div class="mobile-menu-overlay"></div>

		<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				

				<!-- Simple Datatable start -->
			<div class="card-box mb-20">
					<div class="pb-20" >
						<form id="rlmpupdateform">

							<div class="row" style="margin: 0px 10px 0px 10px;">
								<div class="col-lg-12" >
									<div class="row">
										<div class="col-md-6 col-sm-12 ">
											<input type="hidden" name="Idno" value="<?php echo $row['IDno'] ?>" id="IDno">
											<input type="hidden" name="tblid" value="<?php echo $row3['tblID'] ?>" id="tblid">
										</div>
										<div class="col-md-6 col-sm-12 text-right" style="margin-bottom: 10px;">
													<div class="form-group">
													
														 <a href="#" role="button" style="padding-right: 10px;" onclick='printDiv(input-group);'> <i class="fa fa-print" aria-hidden="true"></i> Print |</a>
														 <a href="rlmp-dashboard.php" role="button" style="padding-right: 10px;"> <i class="fa fa-window-close" aria-hidden="true"></i> Close</a>
													</div>	

										</div>
										<div class="col-sm-12 col-md-6" style="border-right: 1px solid #B9B3B2;">
											<div class="input-group custom">
												<div class="col-md-12 col-sm-12" >
													<div class="form-group">
														<label>Fullname (Firstname / Middle Initial / Lastname)</label>
			    											<input type="text" class="form-control" id="fullname" aria-describedby="FullnameHelp" placeholder="Enter Fullname" name="fullname" value="<?php echo $row['Fullname'] ?>"  readonly required>
						    								<div class="valid-feedback">Valid.</div>
						   									<div class="invalid-feedback">Please fill out this field.</div>
													</div>
												</div>
													<div class="col-md-4 col-sm-12" >
														<div class="form-group">
																<label>Province</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="province" autocomplete="off" id="province" required>
																<?php
																     include("../../config/connection.php");
																     echo '<option value="'. $row['Province'] . '">'. $row['Province'].'</option>'; 

																		$query = "SELECT * FROM tblprovince";
																		 $result = $conn->query($query);
																		if ($result->num_rows > 0) {

																			while($rows = $result->fetch_assoc())
																			{  

																            echo '<option value="'. $rows['ProvId'] . '">'. $rows['Province'].'</option>'; 
																       		 }
																	
																		}
																		else
																		{
																				echo '<option value="">Country not available</option>'; 
																			}
																		
																    	 
																     ?>		

																	
																
																</select>
															</div>
													</div>
														<div class="col-md-4 col-sm-12" >
														<div class="form-group">
																<label>City</label>
																<select class="form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="city" autocomplete="off" id="city" required>
																<?php
																echo '<option value="'. $row['City'] . '">'. $row['City'].'</option>';
																?>
																</select>
															</div>
													</div>
														<div class="col-md-4 col-sm-12" >
														<div class="form-group">
																<label>Brgy.</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="brgy" autocomplete="off" id="brgy" required>
																<option value="Admin"<?=$row['Brgy'] == 'Admin' ? ' selected="selected"' : '';?>>For Release</option>
																<option value="Encoder">Legal Checking </option>
																<option value="Engineer">Released</option>
																<option value="Engineer">Pending</option>
																</select>
															</div>
													</div>
										
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Contact No.</label>
				    											<input type="text" class="form-control" id="contact" name="contact" onkeypress="return isNumberKey(event)" value="<?php echo $row['ContactNo'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>	
													</div>

													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Birth Date</label>
				    											<input type="date" class="form-control" id="birth" aria-describedby="BirthHelp" name="birth" value="<?php echo $row['Birthdate'] ?>"  required readonly>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Citizenship</label>
				    											<input type="text" class="form-control" id="citizenship" aria-describedby="citizenshipHelp" placeholder="Enter Citizenship" name="Citizenship" value="<?php echo $row['Citizenship'] ?>"  required readonly>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Gender</label>
				    											<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="gender" autocomplete="off" id="gender" required >
				    											<option value="Male"<?=$row['Sex'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
																<option value="Female"<?=$row['Sex'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
																</select>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Height (cm)</label>
				    											<input type="text" class="form-control" id="height" aria-describedby="HeightHelp" placeholder="Enter Height" name="height" value="<?php echo $row['Height'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Weight (lbs)</label>
				    											<input type="text" class="form-control" id="weight" aria-describedby="WeightHelp" placeholder="Enter Weight" name="weight" value="<?php echo $row['Weight'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-8 col-sm-12" >
														<div class="form-group">
															<label >Place of Seminar</label>
				    											<input type="text" class="form-control" id="seminar" aria-describedby="EmployerAddressHelp" placeholder="Enter Place of Seminar" name="seminar" value="<?php echo $row['Placeofseminar'] ?>" readonly required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
												
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label>Date of Seminar</label>
				    											<input type="date" class="form-control" id="dateOfSeminar" aria-describedby="BirthHelp" name="dateOfSeminar" value="<?php echo $row['Dateofseminar'] ?>" readonly  required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													

											</div><!--close input group-->

										</div><!--col-sm-12 col-md-6-->

										<div class="col-sm-12 col-md-6">
												<div class="input-group">

													<div class="col-md-8 col-sm-12" >
														<div class="form-group">
															<label >Rlmp No.</label>
				    											<input type="text" class="form-control" id="rlmpNo" aria-describedby="RlmpnoHelp" placeholder="Enter RLMP No." name="rlmpNo" value="<?php echo $row['RlmpNo'] ?>" required readonly>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12" >
														<div class="form-group">
															<label >Remarks</label>
				    											<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="remarks" autocomplete="off" id="remarks" required >
				    												<option value="NEW"<?=$row3['Remarks'] == 'NEW' ? ' selected="selected"' : '';?>>NEW</option>	
				    												<option value="RENEW"<?=$row3['Remarks'] == 'RENEW' ? ' selected="selected"' : '';?>>RENEW</option>
				    												<option value="DUPLICATE"<?=$row3['Remarks'] == 'DUPLICATE' ? ' selected="selected"' : '';?>>DUPLICATE</option>
				    												<option value="MODIFICATION"<?=$row3['Remarks'] == 'MODIFICATION' ? ' selected="selected"' : '';?>>MODIFICATION</option>

																</select>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12" >
														<div class="form-group">
															<label >Employer</label>
				    											<input type="text" class="form-control" id="employer" aria-describedby="EmployerHelp" placeholder="Enter Employer" name="employer" value="<?php echo $row['Employer'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12" >
														<div class="form-group">
															<label >Employer Address</label>
				    											<input type="text" class="form-control" id="employeraddress" aria-describedby="EmployerAddressHelp" placeholder="Enter Employer" name="employeraddress" value="<?php echo $row['EmployerAddress'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Issued</label>
				    											<input type="date" class="form-control" id="issued" aria-describedby="emailHelp" name="issued" value="<?php echo $row3['DateIssued'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Expiry</label>
				    											<input type="date" class="form-control" id="expiry" aria-describedby="emailHelp" name="expiry" value="<?php echo $row3['DateExpiry'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Official Reciept No. </label>
				    											<input type="text" class="form-control" id="recieptno" aria-describedby="emailHelp" placeholder="Enter Reciept No" name="recieptno" value="<?php echo $row3['OrNo'] ?>"  required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Form No.</label>
				    											<input type="text" class="form-control" id="form" aria-describedby="emailHelp" placeholder="Enter Form No" name="formno" value="<?php echo $row3['FormNo'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													
												</div><!--close input group-->


										</div><!--close col-sm-12 col-md-6-->
											
																			
									</div><!--close row-->
								</div>
							</div><!--close row-->
						</form>
						

					</div><!--close pb-20-->

			</div><!--close card-box mb-20-->
			
			<!-- Simple Datatable End -->
		</div>
	</div>

</div>
	<!-- js -->


	<script src="../../src/scripts/process.js"></script>
	<script src="../../src/scripts/core.js"></script>
	<script src="../../src/scripts/script.min.js"></script>
	<script src="../../src/scripts/layout-settings.js"></script>
	<script src="../../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- Datatable Setting js -->
	<script src="../../src/scripts/datatable-setting.js"></script>
<script>
	
function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }

</script>

</body>
</html>