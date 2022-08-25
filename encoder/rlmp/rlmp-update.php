<?php
// Start the session
   include("../../config/session.php")
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
	<div class="header">	
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<li class="fas fa fa-user"></li>
						</span>
						 <span class="user-name">
              <?php
                   echo $_SESSION['FullName'];
               ?> </span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Setting</a>
						<hr>
						<a class="dropdown-item" href="../../logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="">
				<img src="../../src/img/ntc-logo.png" width="50px">
				<h5 style="color: #160909;font-size: 15px;padding: 15px"> ENCODER</h5>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="../dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" style="background-color: rgba(0,0,0,.4);">
							<span class="micon fa fa-database"></span><span class="mtext">Database</span>
						</a>
						<ul class="submenu ">
							<li><a href="rlmp-add.php" style="background-color: rgba(0,0,0,.4);">RLMP</a></li>
							<li><a href="../roc/roc-dashboard.php">ROC</a></li>
							<li>
								<a href="javascript:;" class="dropdown-toggle ">RSL</a>
				                    <ul class="submenu">
				                        <li><a href="#">Radio Station License</a></li>
				                        <li><a href="#">Ship Station License</a></li>
				                        <li><a href="#">Aircraft Station License</a></li>
				                         <div class="dropdown-divider"></div>
				                    </ul>
				             </li>
				            
							<li >
								<a href="../mobile permits/mobile-permits.php">MOBILE PHONE</a>
				                   
				             </li>
							<li><a href="">DEALERS PERMIT</a></li>
							<li><a href="">AMATEUR</a></li>
							<div class="dropdown-divider"></div>
						</ul>	
					</li>
					<li>
						<a href="" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-money"></span><span class="mtext">Payment</span>
						</a>
					</li>
				
					<li>
						<a href="../users.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-users"></span><span class="mtext">Users</span>
						</a>
					</li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4><i class="micon dw dw-user1 mtext"></i> Radio Land Mobile Permit (RLMP)</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="rlmp-dashboard.php">List</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Rlmp</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
<?php

 				include("../../config/connection.php");
  				$sql = "SELECT MAX(IDno) as no FROM tblrlmpoperatorinfo";
                $sqlmax  = mysqli_query($conn, $sql);
                $rowmax = mysqli_fetch_array($sqlmax);
             	$id = $rowmax['no'] + 1;	
?>
				<!-- Simple Datatable start -->
			<div class="card-box mb-20">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<legend class="col-md-6 col-sm-12">Operator Information</legend>
								</div>
							</div>
							
						</div>
					</div>

	  <?php

		  	include("../../config/connection.php");
         
                $IDno = $_GET['IDno'];

                $query = "SELECT * FROM tblrlmpoperatorinfo WHERE IDno ='$IDno'";
                $query_run = mysqli_query($conn, $query);
                $row= mysqli_fetch_array($query_run);
                $rowProvince = $row['Province'];
                $rowCity = $row['City'];

                $sqlSelectCity = "SELECT * FROM tblcity WHERE Province = '$rowProvince'";
                $querySelectCity = mysqli_query($conn, $sqlSelectCity);
                $rowQueryCity= mysqli_fetch_array($querySelectCity);
                $rowCityId = $rowQueryCity['CityId'];
              
                $sqlMAX = "SELECT MAX(tblID) as id FROM tblrlmplicenseinfo WHERE IDno = '$IDno'";
               	$sqlmaxquery = mysqli_query($conn, $sqlMAX);
               	$row2 = mysqli_fetch_array($sqlmaxquery);
               	$idmax = $row2['id'];
               		
               	$query2 = "SELECT * FROM tblrlmplicenseinfo WHERE tblID = '$idmax'";
               	$query_run2 = mysqli_query($conn, $query2);
                $row3= mysqli_fetch_array($query_run2);


            ?>

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
														<i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link" value="Submit" name="submit" id="btn-updaterlmp" style="color: #555; text-decoration: none; outline: 0!important;    background-color: transparent; border: 1px solid transparent;"></i>
														 <a href="rlmp-print-preview.php?IDno=<?php echo $row['IDno'] ?>" role="button" style="padding-right: 10px;"> <i class="fa fa-print" aria-hidden="true"></i> Print Preview|</a>
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
															<option value="Davao del Sur" <?=$row['Province'] == 'Davao del Sur' ? ' selected="selected"' : '';?>>Davao del Sur</option>

															<option value="Davao del Norte" <?=$row['Province'] == 'Davao del Norte' ? ' selected="selected"' : '';?>>Davao del Norte</option>

															<option value="Davao Oriental" <?=$row['Province'] == 'Davao Oriental' ? ' selected="selected"' : '';?>>Davao Oriental</option>

															<option value="Davao Occidental" <?=$row['Province'] == 'Davao Occidental' ? ' selected="selected"' : '';?>>Davao Occidental</option>

															<option value="Davao de Oro" <?=$row['Province'] == 'Davao de Oro' ? ' selected="selected"' : '';?>>Davao de Oro</option>

															</select>

														</div>
													</div>
														<div class="col-md-4 col-sm-12" >
															<div class="form-group">
																<label>City</label>
																<select class="form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="city" autocomplete="off" id="City" required>
																

																<?php


																include("../../config/connection.php");
																$prov = $row['Province'];

																$query = "SELECT * FROM tblcity WHERE Province = '$prov' ORDER BY City ASC " ;
																$result = $conn->query($query);

																if ($result->num_rows > 0) {
																	# code...
																	while ($rows2 = $result->fetch_assoc()) {
																		$CityId = $rows2['CityId'];

																		
																		# code...
																		?>

																			<option value='<?php echo $rows2['CityId'] ?>' <?=$row['City'] ==  $rows2['City']? ' selected="selected"' : '';?>><?php echo $rows2['City']?></option>

																	<?php
																		
																	}

																}
																
																
																?>

																</select>
															</div>
													</div>
													<?php 
													 	$query = "SELECT * FROM tblCity WHERE City ='$rowCity'";
										                $query_run = mysqli_query($conn, $query);
										                $rowGetCity= mysqli_fetch_array($query_run);
										                $GetCity = $rowGetCity['CityId'];
													?>

														<div class="col-md-4 col-sm-12" >
														<div class="form-group">

																<label>Brgy.</label>
																<select class="form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="brgy" autocomplete="off" id="Brgy" required>
																	 
																<?php

																include("../../config/connection.php");
																
																$querybrgy = "SELECT * FROM tblbrgy WHERE CityId = ". $rowGetCity['CityId'] ;
																$resultbrgy = $conn->query($querybrgy);

																if ($resultbrgy->num_rows > 0) {
																	# code...
																	while ($rowbrgy = $resultbrgy->fetch_assoc()) {
																		# code...
																		?>

																		<option value='<?php echo $rowbrgy['brgy']?>' <?=$row['Brgy'] ==  $rowbrgy['brgy']? ' selected="selected"' : '';?>><?php echo $rowbrgy['brgy']?></option>

																	<?php
																	}

																}
																else
																{
																	echo '<option>No record</option>';
																}
															
																
																?>
																</select>
															</div>
													</div>
													<div class="col-md-12 col-sm-12" >
														<div class="form-group">
														<label>Prk/St./Village</label>
			    											<input type="text" class="form-control" id="Prk" aria-describedby="FullnameHelp" placeholder="Purok/St/Village" name="Prk" value="<?php echo $row['Prk_St'] ?>">
						    								<div class="valid-feedback">Valid.</div>
						   									<div class="invalid-feedback">Please fill out this field.</div>
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
				    											<option value="M"<?=$row['Sex'] == 'M' ? ' selected="selected"' : '';?>>Male</option>
																<option value="F"<?=$row['Sex'] == 'F' ? ' selected="selected"' : '';?>>Female</option>
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
				    												<option value="REN"<?=$row3['Remarks'] == 'REN' ? ' selected="selected"' : '';?>>RENEW</option>
				    												<option value="DUP"<?=$row3['Remarks'] == 'DUP' ? ' selected="selected"' : '';?>>DUPLICATE</option>
				    												<option value="MOD"<?=$row3['Remarks'] == 'MOD' ? ' selected="selected"' : '';?>>MODIFICATION</option>
				    												<option value="REN/DUP"<?=$row3['Remarks'] == 'REN/DUP' ? ' selected="selected"' : '';?>>REN/DUP</option>
				    												<option value="REN/MOD"<?=$row3['Remarks'] == 'REN/MOD' ? ' selected="selected"' : '';?>>REN/MOD</option>
				    												<option value="REN/DUP/MOD"<?=$row3['Remarks'] == 'REN/DUP/MOD' ? ' selected="selected"' : '';?>>REN/DUP/MOD</option>

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
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label>Amount</label>
															  <div class="input-group mb-3">
															    <div class="input-group-prepend">
															      <span class="input-group-text">&#8369;</span>
															    </div>
															    <input class="form-control" type="number" id="amount" name="amount" value="<?php echo $row3['Amount'] ?>" required>
															  </div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label for="exampleInputEmail1">Date Paid</label>
				    											<input type="date" class="form-control" id="DatePaid" name="DatePaid" value="<?php echo $row3['DatePaid'] ?>" required>
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
											
													<div class="form-check">
												    <input type="checkbox" class="form-check-input" id="showrecord">
												    <label class="form-check-label" for="exampleCheck1">Show Record</label>
												  </div>							
									</div><!--close row-->
								</div>
							</div><!--close row-->
						</form>
						
						<div class="col-sm-12 col-md-12" id="record">
										<table class="data-table table responsive table-hover" id="tablerow">

							<thead>
								<tr>
									<th>Fullname</th>
									<th>Rlmp No</th>
									<th>Date Issued</th>
									<th>Date Expiry</th>
									<th>Form No</th>
									<th>OR No</th>

									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>

					<tbody>

						  
						<!-- Fetch Data -->

						<?php 
						  include("../../config/connection.php");

						  $sql = "SELECT tblrlmpoperatorinfo.IDno, tblrlmpoperatorinfo.RlmpNo, tblrlmpoperatorinfo.Fullname,tblrlmplicenseinfo.tblID, tblrlmplicenseinfo.DateIssued, tblrlmplicenseinfo.DateExpiry, tblrlmplicenseinfo.FormNo, tblrlmplicenseinfo.OrNo FROM tblrlmpoperatorinfo INNER JOIN tblrlmplicenseinfo ON tblrlmpoperatorinfo.IDno = tblrlmplicenseinfo.IDno WHERE tblrlmpoperatorinfo.IDno = '$IDno'";

						  $result = mysqli_query($conn, $sql);

						  if ($result && mysqli_num_rows($result) > 0) 
						  {
						    while ($row = $result -> fetch_assoc()) 
						    {
						      $id = $row['IDno'];
						     $id = $row['RlmpNo'];

						      echo  "<tr'>
						      <td>" . $row["Fullname"] . "</td>
						      <td>" . $row["RlmpNo"] . "</td>
						       	<td>" . $row["DateIssued"] . "</td>
						        <td>" . $row["DateExpiry"] . "</td>
						         <td>" . $row["FormNo"] . "</td>
						          <td>" . $row["OrNo"] . "</td>
						       <td>" .

						        "<div class='dropdown'>
						                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
						                        <i class='dw dw-more'></i>
						                      </a>
						                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
						                        <a class='dropdown-item' href='rlmp-update.php?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
						                       <a class='dropdown-item' href='action/action-rlmp-delete.php?tblID=" . $row['tblID'] . "' name='deletebtn' id='deletebtn'>
						                        <i class='dw dw-delete-3' ></i> Delete </a>
						                      </div>
						                    </div>

						         </td></tr>";
						      
						    }

						    echo "</table>";

						  }
						  else
						  {
						 
						  }

						  $conn -> close();
						?>
							
									     </tbody>
									 </table>
							</div>
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
		$(document).ready(function(){
			$("#record").hide();
			$("#showrecord").click(function(){
				if ($(this).is(":checked")) {
					$("#record").show();
				}
				else
				{
					$("#record").hide();
				}
			});
		});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}    
</script>

</body>
</html>