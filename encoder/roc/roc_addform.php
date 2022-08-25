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
							<li><a href="../rlmp/rlmp-dashboard.php">RLMP</a></li>
							<li><a href="roc-dashboard.php" style="background-color: rgba(0,0,0,.4);">ROC</a></li>
							<li >
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
								<h4><i class="micon dw dw-user1 mtext"></i> Radio Operator Certificate (ROC)</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="roc-dashboard.php">List</a></li>
									<li class="breadcrumb-item active" aria-current="page">ROC</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
<?php

 				include("../../config/connection.php");
  				$sql = "SELECT MAX(IDno) as no FROM tblrocoperatorinfo";
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

					<div class="pb-20" >
						<form id="rocform">

							<div class="row" style="margin: 0px 10px 0px 10px;">
								<div class="col-lg-12" >
									<div class="row">

										<div class="col-md-6 col-sm-12 ">
											<input type="hidden" name="IDno" value="<?php echo $id?>" id="IDno">
												<div class="col-md-4 col-sm-12" >
													<div class="input-group mb-3">
											          <div class="input-group-prepend">
											            <label class="input-group-text" for="type">Type</label>
											          </div>
											          <select class="custom-select" id="type" name="type">
											            <option selected disabled>Select Type</option>
											            <option value="GROC">GROC</option>
											            <option value="SROP">SROP</option>
											            <option value="1PHN">1 PHN</option>
											            <option value="2PHN">2 PHN</option>
											            <option value="3PHN">3 PHN</option>
											            <option value="RMAP">RMAP</option>
											            <option value="1RTG">1 RTG</option>
											            <option value="2RTG">2 RTG</option>
											            <option value="3RTG">3 RTG</option>
											            
											          </select>
											      </div>
												</div>
										</div>
										<div class="col-md-6 col-sm-12 text-right" style="margin-bottom: 10px;">
													<div class="form-group">
														<i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link " value="Submit" id="btn-addroc" style="color: #555; text-decoration: none; outline: 0!important;    background-color: transparent; border: 1px solid transparent;"></i>
														 <i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link " value="Print Preview" id="print" onclick="printDiv()" style="color: #555; text-decoration: none; outline: 0!important; background-color: transparent; border: 1px solid transparent;"></i>
														 <a href="roc-dashboard.php" role="button" style="padding-right: 10px;"> <i class="fa fa-window-close" aria-hidden="true"></i> Close</a>
													</div>	

										</div>

										<div class="col-sm-12 col-md-6" style="border-right: 1px solid #B9B3B2;">
											<div class="input-group custom">
												<div class="col-md-5 col-sm-12" >
													<div class="form-group">
														<label>Firstname</label>
			    											<input type="text" class="form-control" id="Firstname" aria-describedby="FullnameHelp" placeholder="Enter Firstname" name="Firstname" required>
													</div>
												</div>
												<div class="col-md-2 col-sm-12" >
													<div class="form-group">
														<label>M.I</label>
			    											<input type="text" class="form-control" id="MiddleInitial" aria-describedby="FullnameHelp" placeholder="M.I" name="MiddleInitial" required>
													</div>
												</div>
												<div class="col-md-5 col-sm-12" >
													<div class="form-group">
														<label>Lastname</label>
			    											<input type="text" class="form-control" id="Lastname" aria-describedby="FullnameHelp" placeholder="Enter Lastname" name="Lastname" required>
													</div>
												</div>
												
													<div class="col-md-12 col-sm-12" >
														<div class="form-group">
														<label>Address</label>
			    											<input type="text" class="form-control" id="address" aria-describedby="FullnameHelp" placeholder="Brgy./St/City/Province" name="address">
						    								<div class="valid-feedback">Valid.</div>
						   									<div class="invalid-feedback">Please fill out this field.</div>
													</div>
													</div>
										
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Contact No.</label>
				    											<input type="text" class="form-control" id="Contact" name="Contact" aria-describedby="ContactHelp" placeholder="Enter Contact No" onkeypress="return isNumberKey(event)" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>	
													</div>

													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Birth Date</label>
				    											<input type="date" class="form-control" id="Birth" aria-describedby="BirthHelp" name="Birth" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Citizenship</label>
				    											<input type="text" class="form-control" id="Citizenship" aria-describedby="CitizenshipHelp" placeholder="Enter Citizenship" name="Citizenship" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Gender</label>
				    											<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="gender" autocomplete="off" id="gender" required>
																<option value="M">Male</option>
																<option value="F">Female</option>
																</select>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Height (cm)</label>
				    											<input type="text" class="form-control" id="Height" aria-describedby="HeightHelp" placeholder="Enter Height" name="Height" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	
													<div class="col-md-3 col-sm-12" >
														<div class="form-group">
															<label >Weight (lbs)</label>
				    											<input type="text" class="form-control" id="Weight" aria-describedby="WeightHelp" placeholder="Enter Weight" name="Weight" required>
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
															<label >Registration No.</label>
				    											<input type="text" class="form-control" id="regNO" placeholder="Enter Registration No." name="regNO" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12" >
														<div class="form-group">
															<label >Remarks</label>
				    											<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="Remarks" autocomplete="off" id="Remarks" required>
																<option value="NEW">NEW</option>
																<option value="REN">RENEW</option>
																<option value="DUP">DUPLICATE</option>
																<option value="MOD">MODIFICATION</option>
																<option value="REN/DUP">REN/DUP</option>
																<option value="REN/MOD">REN/MOD</option>
																<option value="REN/MOD/DUP">REN/MOD/DUP</option>
																</select>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
														<div class="col-md-12 col-sm-12" >
														<div class="form-group">
															<label >Place of Exam/Seminar</label>
				    											<input type="text" class="form-control" id="PlaceSeminar" aria-describedby="EmployerAddressHelp" placeholder="Enter Place of Seminar" name="PlaceSeminar" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
												
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label>Date of Exam/Seminar</label>
				    											<input type="date" class="form-control" id="DateOfSeminar" aria-describedby="BirthHelp" name="DateOfSeminar" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-12">
														<div class="form-group">
															<label>Exam Rating</label>
				    											<input type="text" class="form-control" id="ExamRating" aria-describedby="BirthHelp" name="ExamRating">
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													
												
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Issued</label>
				    											<input type="date" class="form-control" id="Issued" aria-describedby="emailHelp" name="Issued" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Expiry</label>
				    											<input type="date" class="form-control" id="Expiry" aria-describedby="emailHelp" name="Expiry" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label>Official Reciept No. </label>
				    											<input type="text" class="form-control" id="RecieptNo" aria-describedby="emailHelp" placeholder="Enter Reciept No" name="RecieptNo" required>
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
															    <input class="form-control" type="number" id="amount" name="amount" required>
															  </div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label for="exampleInputEmail1">Date Paid</label>
				    											<input type="date" class="form-control" id="DatePaid" name="DatePaid" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label>Form No.</label>
				    											<input type="text" class="form-control" id="Form" aria-describedby="emailHelp" placeholder="Enter Form No" name="Form" required>
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

			<?php

		  	include("../../config/connection.php");

		  		$sqlmax = "SELECT MAX(tblID) as id FROM tblrlmplicenseinfo WHERE Remarks = 'NEW'";
		  		$querymax = mysqli_query($conn, $sqlmax);
                $rowmax= mysqli_fetch_array($querymax);
                $max = $rowmax['id'];

                $sqlsig = "SELECT * FROM tblsignatory";
		  		$querysig = mysqli_query($conn, $sqlsig);
                $rowsig= mysqli_fetch_array($querysig);
                $name = utf8_encode($rowsig['Name']);	
         
               $query = "SELECT tblrlmpoperatorinfo.IDno, tblrlmpoperatorinfo.RlmpNo, tblrlmpoperatorinfo.Fullname,tblrlmpoperatorinfo.Prk_St, tblrlmpoperatorinfo.Brgy, tblrlmpoperatorinfo.City, tblrlmpoperatorinfo.Province,tblrlmpoperatorinfo.Birthdate, tblrlmpoperatorinfo.Citizenship,tblrlmpoperatorinfo.Sex,tblrlmpoperatorinfo.Height,tblrlmpoperatorinfo.Weight,tblrlmpoperatorinfo.EmployerAddress,tblrlmpoperatorinfo.Employer,tblrlmpoperatorinfo.Placeofseminar,tblrlmpoperatorinfo.DateofSeminar,tblrlmplicenseinfo.IDno, tblrlmplicenseinfo.DateIssued, tblrlmplicenseinfo.DateExpiry, tblrlmplicenseinfo.Remarks, tblrlmplicenseinfo.FormNo, tblrlmplicenseinfo.OrNo,tblrlmplicenseinfo.Amount,tblrlmplicenseinfo.DatePaid FROM tblrlmplicenseinfo INNER JOIN tblrlmpoperatorinfo ON tblrlmplicenseinfo.IDno = tblrlmpoperatorinfo.IDno WHERE tblrlmplicenseinfo.tblID = $max";
                         
                $query_run = mysqli_query($conn, $query);
               	$row= mysqli_fetch_array($query_run);	
                $fname = utf8_encode($row['Fullname']);
                $prk = utf8_encode($row['Prk_St']);
                $brgy = utf8_encode($row['Brgy']);
                $city = utf8_encode($row['City']);
               
            ?>

					<div class="col-sm-12 col-md-10" style="padding-top: 10px;" id="printpage" >
						<div class="row">
							<div class="col-sm-12 col-md-3" id="first" style="text-align: left;padding-top: 20px;">
								<div class="row">
								    <div class="col-sm-12 col-md-12 mb-20 pd-5" style="text-align: right">
								    <input type="text" id="seminar" style="background: transparent; border: none;outline: none;text-align: center; font-size: 13px;" value="<?php echo $row['DateofSeminar'] ?>" >
								    </div>
								    <div class="col-sm-12 col-md-12 mb-20" style="text-align: right">
								      <input type="text" id="seminar" style="background: transparent; border: none; outline: none;text-align: center;font-size: 13px; " value="<?php echo $row['Placeofseminar'] ?>">
								    </div>
								     <div class="col-md-12 mb-20">
								     	<small style="text-align: center;">EMPLOYEE/CLUB:</small>
								     	  <input type="text" id="seminar" style="background: transparent; border: none; outline: none;text-align: center; width: 100%; font-size: 13px;" value="<?php echo $row['Employer'] ?>">
								    </div>
								     <div class="col-md-12 mb-20 pb-5 text-right">
								      <input type="text" id="seminar" style="background: transparent; border: none; outline: none;text-align: center; width: 40%; font-size: 13px;"value="<?php echo $row['OrNo'] ?>">
								    </div>
								    <div class="col-md-12 mb-20 pb-8 text-right">
								      <input type="text" id="seminar" style="background: transparent; border: none; font-size: 13px;outline: none;text-align: center; width: 70%;" value="<?php echo $row['Amount'] ?>">
								    </div>
								    <div class="col-md-12 mb-4 text-right">
								      <input type="text" id="seminar" style="background: transparent; border: none; font-size: 13px;outline: none;text-align: center; width: 50%;" value="<?php echo $row['DatePaid'] ?>">
								    </div>
								</div>	
							</div>
							<div class="col-sm-12 col-md-3 " style="text-align: left;padding-top: 22px;">
								<div class="row">
								    <div class="col-sm-12 col-md-12" style="text-align: right">
								    <input type="text" id="seminar" style="background: transparent; border: none;   font-size: 11px;outline: none;text-align: center; width: 20%;" value="<?php echo $row['Remarks'] ?>">
								    </div>

								    <div class="col-sm-12 col-md-12 pb-20 mb-20" style="text-align: right">
								      <input type="text" id="seminar" style="background: transparent; border: none;   font-size: 11px; outline: none;text-align: center; font-weight: bold" value="<?php echo $row['RlmpNo'] ?>">
								    </div>

								     <div class="col-md-12 mb-10">
								     	 <input type="text" id="seminar" style="background: transparent; border: none;  font-size: 13px; font-weight: bold; outline: none;text-align: center; width: 100%;" value="<?php echo $fname?>">
								    </div>

								     <div class="col-md-12 mb-15">
								     	<input type="text" id="seminar" style="background: transparent; border: none;  font-size: 11px; outline: none;text-align: center; width: 100%;" value="<?php echo $prk ?>, Brgy <?php echo $brgy ?>">

								     	<input type="text" id="seminar" style="background: transparent; border: none;  font-size: 11px; outline: none;text-align: center; width: 100%;" value="<?php echo $city ?>, <?php echo $row['Province']?>">
								    </div>
								    
								    <div class="col-md-12 mb-20 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 40%; font-size: 13px;"><?php echo $row['Birthdate']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif;font-size: 13px; width: 60%;"><?php echo $row['Citizenship']?>
											</td>
											</tr>
										</tbody>
									</table>
								    </div>

								    <div class="col-md-12 mb-15 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 20%; font-size: 13px;"><?php echo $row['Sex']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px; width: 40%;"><?php echo $row['Height']?>
											</td>
												<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px;width: 30%;"><?php echo $row['Weight']?>
											</td>
											</tr>
										</tbody>
									</table>
								    </div>

								    <div class="col-md-12 mb-20 pd-5 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 30%; font-size: 13px;"><?php echo $row['DateIssued']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px; width: 40%;"><?php echo $row['DateExpiry']?>
											</td>
											
											</tr>
										</tbody>
									</table>
								    </div>
								    <div class="col-md-12 ">
								     	 <input type="text" id="seminar" style="background: transparent; border: none; font-size: 13px;  font-weight: bold;outline: none;text-align: center; width: 100%;"value="<?php echo $name?>">
								    </div>
								     <div class="col-md-12">
								     	 <input type="text" id="seminar" style="background: transparent; border: none;  font-size: 13px; outline: none;text-align: center; width: 100%;" value="<?php echo $rowsig['Position']?>">
								    </div>
								    <div class="col-sm-12 col-md-12 mb-4" style="text-align: right">
								   		<p style="font-size: 12px; font-family: 'Open Sans', sans-serif; ">DST Paid</p>
								    </div>

								</div>
							</div>
							<div class="col-sm-12 col-md-3" style="text-align: left;padding-top: 22px;">
								<div class="row">
								    <div class="col-sm-12 col-md-12" style="text-align: right">
								    <input type="text" id="seminar" style="background: transparent; border: none;   font-size: 11px;outline: none;text-align: center; width: 20%;" value="<?php echo $row['Remarks'] ?>">
								    </div>

								    <div class="col-sm-12 col-md-12 pb-20 mb-20" style="text-align: right">
								      <input type="text" id="seminar" style="background: transparent; border: none;   font-size: 11px; outline: none;text-align: center; font-weight: bold" value="<?php echo $row['RlmpNo'] ?>">
								    </div>

								     <div class="col-md-12 mb-10">
								     	 <input type="text" id="seminar" style="background: transparent; border: none;  font-size: 13px; font-weight: bold; outline: none;text-align: center; width: 100%;" value="<?php echo $fname?>">
								    </div>

								     <div class="col-md-12 mb-15">
								     	<input type="text" id="seminar" style="background: transparent; border: none;  font-size: 11px; outline: none;text-align: center; width: 100%;" value="<?php echo $prk ?>, Brgy <?php echo $brgy ?>">

								     	<input type="text" id="seminar" style="background: transparent; border: none;  font-size: 11px; outline: none;text-align: center; width: 100%;" value="<?php echo $city ?>, <?php echo $row['Province']?>">
								    </div>
								    
								    <div class="col-md-12 mb-20 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 40%; font-size: 13px;"><?php echo $row['Birthdate']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif;font-size: 13px; width: 60%;"><?php echo $row['Citizenship']?>
											</td>
											</tr>
										</tbody>
									</table>
								    </div>

								    <div class="col-md-12 mb-15 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 20%; font-size: 13px;"><?php echo $row['Sex']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px; width: 40%;"><?php echo $row['Height']?>
											</td>
												<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px;width: 30%;"><?php echo $row['Weight']?>
											</td>
											</tr>
										</tbody>
									</table>
								    </div>
								   
								    <div class="col-md-12 mb-20 pd-5 text-right">
								     <table width="100%">
										<tbody>
											<tr>
											<td style="text-align: center; font-size: 15px; font-family: 'Open Sans', sans-serif;width: 30%; font-size: 13px;"><?php echo $row['DateIssued']?>
											</td>
											<td style="text-align:center; font-size: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px; width: 40%;"><?php echo $row['DateExpiry']?>
											</td>
											
											</tr>
										</tbody>
									</table>
								    </div>
								    <div class="col-md-12 ">
								     	 <input type="text" id="seminar" style="background: transparent; border: none; font-size: 13px;  font-weight: bold;outline: none;text-align: center; width: 100%;"value="<?php echo $name?>">
								    </div>
								     <div class="col-md-12">
								     	 <input type="text" id="seminar" style="background: transparent; border: none;  font-size: 13px; outline: none;text-align: center; width: 100%;" value="<?php echo $rowsig['Position']?>">
								    </div>
								    <div class="col-sm-12 col-md-12 mb-4" style="text-align: right">
								   		<p style="font-size: 12px; font-family: 'Open Sans', sans-serif; ">DST Paid</p>
								    </div>

								</div>
							</div>
																
						</div><!--close row-->
					</div><!--printpage-->
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
	function isNumberKey(evt){
	    var charCode = (evt.which) ? evt.which : event.keyCode
	    if (charCode > 31 && (charCode < 48 || charCode > 57))
	        return false;
	    return true;
	}
	 function printDiv() {
            var divContents = document.getElementById("printpage").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<html>');
            a.document.write('<link rel="stylesheet" type="text/css" href="../../src/styles/core.css">');
            a.document.write('<link rel="stylesheet" type="text/css" href="../../src/styles/icon-font.min.css">');
			a.document.write('<link rel="stylesheet" type="text/css" href="../../src/styles/style.css">');
			a.document.write('<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/dataTables.bootstrap4.min.css">');
			a.document.write('<link rel="stylesheet" type="text/css" href="../../src/plugins/datatables/css/responsive.bootstrap4.min.css">');
			a.document.write('<style> body{margin-top: 230px; margin-left: 150px; width: 80%;height: 80%;filter: progid:DXImageTransform.Microsoft.BasicImage(Rotation=3)} @page { size: landscape;}</style>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }

	$(document).ready(function(){
			window.onload = function(){
				$("#printpage").show();
				
			}
		});   
	</script>


</body>
</html>