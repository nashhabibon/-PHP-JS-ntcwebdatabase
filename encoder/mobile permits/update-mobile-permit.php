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
	  <script>
        function printDiv() {
            var divContents = document.getElementById("printpage").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<html>');
            a.document.write('<style> body{margin: 100px 0px 0px 0px;} </style>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

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
							<li><a href="../roc/roc-dashboard.php">ROC</a></li>
							<li >
								<a href="javascript:;" class="dropdown-toggle ">RSL</a>
				                    <ul class="submenu">
				                        <li><a href="#">Radio Station License</a></li>
				                        <li><a href="#">Ship Station License</a></li>
				                        <li><a href="#">Aircraft Station License</a></li>
				                         <div class="dropdown-divider"></div>
				                    </ul>
				             </li>
				            
							<li>
								<a href="mobile-permits.php" style="background-color: rgba(0,0,0,.4);">MOBILE PHONE</a>
				                   
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
								<h4><i class="micon dw dw-user1 mtext"></i> Mobile Phone Permits</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item"><a href="mobile-permits.php">List</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Permits</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
	  <?php

		  	include("../../config/connection.php");
         
                $id = $_GET['fileNo'];

                 $query  = "SELECT tblmobile_permit.fileNo, tblmobile_permit.PermitNo, tblmobile_permit.Type, tblmobile_permit_records.Record_Id, tblmobile_permit_records.fileNo, tblmobile_permit_records.BusinessName, tblmobile_permit_records.Address, tblmobile_permit_records.ContactNo, tblmobile_permit_records.BusinessNo,tblmobile_permit_records.Owner, tblmobile_permit_records.DateIssued, tblmobile_permit_records.Validity, tblmobile_permit_records.OrNo, tblmobile_permit_records.Amount, tblmobile_permit_records.DatePaid, tblmobile_permit_records.Remarks, tblmobile_permit_records.Status, tblmobile_permit_records.Technician, tblmobile_permit_records.Note FROM tblmobile_permit_records INNER JOIN tblmobile_permit ON tblmobile_permit_records.fileNo = tblmobile_permit.fileNo WHERE tblmobile_permit_records.Record_Id = (SELECT MAX(Record_Id) as id FROM tblmobile_permit_records WHERE fileNo = $id) ";
             
               
                $query_run = mysqli_query($conn, $query);
                $row= mysqli_fetch_array($query_run);
                $fileNo = $row['fileNo'];
                $record_id = $row['Record_Id'];
                 $tech = $row['Technician'];
                 $or = $row['OrNo'];
                 $date = $row['DatePaid'];
                 $am = $row['Amount'];

            ?>

				<!-- Simple Datatable start -->
			<div class="card-box mb-20">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<legend class="col-md-6 col-sm-12">Permit Information</legend>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<label>File No. <?php echo $fileNo ?></label>
							</div>
						</div>
					</div>

					<div class="pb-20" >
						<form id="update_mobileform">
							<div class="row" style="margin: 0px 10px 0px 10px;">
								<div class="col-lg-12" >
									<div class="row">
										<div class="col-md-6 col-sm-12 ">
											<input type="hidden" name="IDno" value="<?php echo $id?>" id="IDno">
											<input type="hidden" name="RecordId" value="<?php echo $record_id?>" id="RecordId">
											</div>

											<div class="col-md-6 col-sm-12 text-right" style="margin-bottom: 10px;">
													<div class="form-group">
														<i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link " value="Submit" id="btn-updateMobile" style="color: #555; text-decoration: none; outline: 0!important; background-color: transparent; border: 1px solid transparent;"></i> |
														<i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link " value="Print Preview" id="print" onclick="printDiv()" style="color: #555; text-decoration: none; outline: 0!important; background-color: transparent; border: 1px solid transparent;"></i> |

														 <a href="mobile-permits.php" role="button" style="padding-right: 10px;"> <i class="fa fa-window-close" aria-hidden="true"></i> Close</a>
													</div>	

											</div>

										<div class="col-sm-12 col-md-6" style="border-right: 1px solid #B9B3B2;">
											<div class="input-group">
												<div class="col-md-12 col-sm-12" >
													<div class="form-group">
														<label >Business Name</label>
			    											<input type="text" class="form-control" id="BName" name="BName" aria-describedby="emailHelp" placeholder="Enter Business Name" value="<?php echo $row['BusinessName'] ?> " required>
						    								<div class="valid-feedback">Valid.</div>
						   									<div class="invalid-feedback">Please fill out this field.</div>
													</div>
												</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label >Business Address</label>
				    											<input type="text" class="form-control" id="BAddress" name="BAddress" placeholder="Enter Business Address" value="<?php echo $row['Address'] ?> " required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Business No (SEC/DTI)</label>
				    											<input type="text" class="form-control" id="BNo" name="BNo" placeholder="Enter Business No (SEC/DTI)" value="<?php echo $row['BusinessNo'] ?> " required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>	
													</div>

													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Contact No.</label>
				    											<input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter Contact No" value="<?php echo $row['ContactNo'] ?> ">
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label>Owner</label>
				    											<input type="text" class="form-control" id="owner" name="owner" placeholder="Enter Owner" value="<?php echo $row['Owner'] ?> " required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	

													<div class="col-md-12 col-sm-12" id="technician">
														<div class="form-group">
															<label>Technician</label>
				    											<input type="text" class="form-control" id="tech" name="tech" placeholder="Enter Technician" value="<?php echo $row['Technician'] ?> ">
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>	

											</div><!--close input group-->

										</div><!--col-sm-12 col-md-6-->

										<div class="col-sm-12 col-md-6">
												<div class="input-group">
													
													<div class="col-md-4 col-sm-12">
														 	<div class="form-group">
																<label>Permit Type</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="Ptype" autocomplete="off" id="Ptype" required>
																<option value="MPRR" <?=$row['Type'] == 'MPRR' ? ' selected="selected"' : '';?>>MPRR</option>
																<option value="MPD" <?=$row['Type'] == 'MPD' ? ' selected="selected"' : '';?>>MPD</option>
																<option value="MPSC" <?=$row['Type'] == 'MPSC' ? ' selected="selected"' : '';?>>MPSC</option>
																</select>
															</div>
													</div>
		
													<div class="col-md-8 col-sm-12" >
														<div class="form-group">
															<label>Permit No</label>
				    											<input type="text" class="form-control" id="PermitNo" name="PermitNo" placeholder="Permit No" value="<?php echo $row['PermitNo'] ?> " required readonly>
							    								<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>

													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Issued</label>														
				    											<input type="date" class="form-control" id="dateIssued" name="dateIssued" value="<?php echo $row['DateIssued'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label >Date Expiry</label>
				    											<input type="date" class="form-control" id="dateExpiry" name="dateExpiry" value="<?php echo $row['Validity'] ?>" required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-12" >
														<div class="form-group">
																<label>Status</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="Status" autocomplete="off" id="Status" required>

																<option value="FOR RELEASE"<?=$row['Status'] == 'FOR RELEASE' ? ' selected="selected"' : '';?>>FOR RELEASE</option>

																<option value="LEGAL CHECKING" <?=$row['Status'] == 'LEGAL CHECKING' ? ' selected="selected"' : '';?>>LEGAL CHECKING</option>

																<option value="RELEASED" <?=$row['Status'] == 'RELEASED' ? ' selected="selected"' : '';?>>RELEASED</option>

																<option value="PENDING"  <?=$row['Status'] == 'PENDING' ? ' selected="selected"' : '';?>>PENDING</option>
																</select>
															</div>
													</div>
													<div class="col-md-6 col-sm-12" >
														<div class="form-group">
																<label>Remarks</label>
																<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="Remarks" autocomplete="off" id="Remarks" required>
																<option value="NEW"<?=$row['Remarks'] == 'NEW' ? ' selected="selected"' : '';?>>NEW</option>	
																<option value="RENEWAL"<?=$row['Remarks'] == 'RENEWAL' ? ' selected="selected"' : '';?>>RENEWAL</option>
																<option value="MODIFICATION"<?=$row['Remarks'] == 'MODIFICATION' ? ' selected="selected"' : '';?>>MODIFICATION</option>
																<option value="DUPLICATE" <?=$row['Remarks'] == 'DUPLICATE' ? ' selected="selected"' : '';?>>DUPLICATE</option>
																</select>
															</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label >Official Reciept No.</label>
				    											<input type="text" class="form-control" id="OrNo" name="OrNo" placeholder="Enter Reciept No"  value="<?php echo $row['OrNo'] ?> " required>
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
															    <input class="form-control" type="text" id="amount" name="amount"  value="<?php echo $row['Amount'] ?> " required>
															  </div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="form-group">
															<label >Date Paid</label>
				    											<input type="date" class="form-control" id="datePaid" name="datePaid" value="<?php echo $row['DatePaid'] ?>"required>
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12">
														<div class="form-group">
															<label >Note</label>
				    											<input type="text" class="form-control" id="note" name="note"  value="<?php echo $row['Note'] ?> ">
				    											<div class="valid-feedback">Valid.</div>
							   									<div class="invalid-feedback">Please fill out this field.</div>
														</div>
													</div>
													
												</div><!--close input group-->


										</div><!--close col-sm-12 col-md-6-->

												<div class="col-md-12 col-sm-12">
													<div class="form-check">
												    <input type="checkbox" class="form-check-input" id="showrecord">
												    <label class="form-check-label" for="exampleCheck1">Show Record</label>
												  </div>
												</div>
																		
									</div><!--close row-->
								</div>
							</div><!--close row-->
						</form>
						<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;" id="printpage">
						
											<div class="col-sm-12 col-md-12"  style="padding-bottom: 10px;">
												<table width="100%" border="0" cellpadding="1"  align="center">
													<tbody>
														<tr style="text-align: center;">
															<?php
															
															$type = $row['Type'];
															 switch ($type) {
																	  case 'MPRR':
																	    echo '<td width="100%" style="font-size: 25px; color: #5b5b5b; font-family: "Open Sans", sans-serif; line-height: 
																		18px; vertical-align: bottom; text-align: center; padding-bottom: 20px; ">
																						<strong>MOBILE PHONE RETAILER/RESELLERS PERMIT</strong>
																					</td>';
																	    break;
																	 case "MPD":
																	    echo '<td colspan="100" style="font-size: 25px; color: #5b5b5b; font-family: "Open Sans", sans-serif; line-height: 
																		18px; vertical-align: bottom; text-align: center; padding-bottom: 10px">
																						<strong>MOBILE PHONE DEALERS PERMIT </strong>
																					</td>';
																	    break;

																	 case "MPSC":
																	    echo '<td colspan="100" style="font-size: 25px; color: #5b5b5b; font-family: "Open Sans", sans-serif; line-height: 
																		18px; vertical-align: bottom; text-align: center; padding-bottom: 10px">
																						<strong>MOBILE PHONE SERVICE CENTER PERMIT</strong>
																					</td>';
																	    break;
																	  
																	}
															
															?>
									

														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-12 col-md-11" style="text-align: right;padding-bottom: 10px;">
												<small style="text-align: right; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; padding-bottom: 10px;"> <?php echo $row['Remarks'];?></small>

											</div>

											<div class="col-sm-12 col-md-11" style="text-align: right; padding-bottom: 20px;">
												<small style="text-align: right; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;">Permit No.</small>
												<strong style="text-align: right; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000;"> <?php echo $row['PermitNo'];?></strong>
											</div>

											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 20%;">
																Name of Applicant:
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 80%;">
																<?php echo $row['BusinessName'];?>
															</td>
														</tr>
													</tbody>
												</table>
												
											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 20%;">
																Business Address:
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 80%;">
																<?php echo $row['Address'];?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 20%;">
																Telephone No:
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 30%;">
																<?php echo $row['ContactNo'];?>
															</td>
															<td style="text-align: center; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 20%;">
																Fax No:
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 30%;">
																<?php echo $row['ContactNo'];?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-sm-12 col-md-12" style="padding-bottom: 30px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 25%;">
																SEC / DTI Registration No:
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 75%;">
																<?php echo $row['BusinessNo'];?>
															</td>
														</tr>
													</tbody>
												</table>
												
											</div>

											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
											<p style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;">
												This is to certify that the above named 
												<?php $type = $row['Type']; 
												 switch ($type) {
																	  case 'MPRR':
																	    echo "Retailer/Reseller";
																	    break;
																	 case "MPD":
																	    echo "Dealer";;
																	    break;

																	 case "MPSC":
																	    echo "Service Center";
																	    break;
																	  
																	}

												?> 

												has complied with the minimum requirements of the Commission and is hereby granted a  

												<?php $type = $row['Type']; 
												 switch ($type) {
																	  case 'MPRR':
																	    echo "Mobile Phone Retailer/Reseller";
																	    break;
																	 case "MPD":
																	    echo "Mobile Phone Dealer's";;
																	    break;

																	 case "MPSC":
																	    echo "Mobile Phone Service Center ";
																	    break;
																	  
																	}

												?> 

												 Permit to engage in the 

												<?php $type = $row['Type']; 
												 switch ($type) {
																	  case 'MPRR':
																	    echo "purchase, sale, lease and/or retail";
																	    break;
																	 case "MPD":
																	    echo "purchase, sale, lease and/or retail";;
																	    break;

																	 case "MPSC":
																	    echo "repair, servicing or maintenance ";
																	    break;
																	  
																	}

												?> 

												of mobile phones units, parts and its accessories.
											</p>
											<p style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;">
												The grantee of this PERMIT shall be subject to the provision of NTC Memo Circular No. 08.-08-2004, and the rules and regulation which may be promulgated thereafter by this Commission.
											</p>
												
											</div>

											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 30%;">
																This permit is VALID UP TO :
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 70%; font-weight: bold;">
																<?php 
																$dateValidity = date_create($row['Validity']);

																echo date_format($dateValidity,"F d, Y")?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 20px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 10%;">
																Issued On :
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; border-bottom: 1px solid #000000; width: 70%; font-weight: bold;">
																<?php 
																$dateValidity = date_create($row['DateIssued']);

																echo date_format($dateValidity,"F d, Y")?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											

											<div class="col-sm-12 col-md-12" style="padding: 0px 50px 10px 0px;">
											
												<h6 style="text-align: right; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;"> <?php
													include("../../config/connection.php");
         
									                $query  = "SELECT * from tblntcemployee WHERE Position = 'Regional Director'";
									                $query_run = mysqli_query($conn, $query);
									                $row= mysqli_fetch_array($query_run);
									                $name = utf8_encode( $row['Name']);						 
									               	echo $name;
												?>
												<br/>
													<?php
													$pos = utf8_encode( $row['Position']);
									               	echo $pos;
												?>
												</h6>

											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<small style="text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; "> 
													Notes:
												</small>
												
											</div>
											<div class="col-sm-12 col-md-12" style="padding: 0px 0px 10px 30px;">

												<?php 
												
												 switch ($type) {
													case 'MPD':
													echo "<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '> <br/> <b>1.</b>The dealer is subject to occular inspection at any reasonable time by the authorized NTC representative's.  <br/>  
														Any violation found at the top of inspection will cause the Commission to charge the dealer 
														for administrative case</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '> <br/><b>2.</b>All Mobile Phones distributed by the dealer shall be NTC type approved with genuine type approval labels/sticker pursuant to the provision of NTC MC No. 02-01-2001.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>3.</b>This Permit is not valid without payment of the prescribed fees and official dry seal of this Commission.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>4.</b>To submit sales and stock report of mobile phones at NTC R-XI Davao at the end of each Month.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>5.</b>Paid under Or No. " . $or . " dated. " . $date . " amount " . $am . "</small>";
														 break;

													case "MPRR":
													echo "<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><b>1.</b> Renewal of Permit should be made at least two(2) months before expiration to avoid penalties.  <br/> 
															[ Payment for Renewal if not expired: P3,030.00 ] </small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '> <br/> <b>2.</b> The Retailer/Reseller is subject to ocular inspection at any reasonable time by the authorized NTC representative(s).<br/>
  															 Any violations found at the time of inspection will cause this Commission to charge the Retailer/Reseller for administrative cases.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>3.</b> This Permit is not valid without payment of the prescribed fees and official dry seal of this Commission.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>4.</b> Paid under Or No. " . $or . " dated. " . $date . " amount " . $am . "</small>";
														 break;

													case "MPSC":
													echo "<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif'> <b>1.</b> The Service Center is subject to ocular inspection at any reasonable time by the authorized NTC representative(s). <br> 
															 Any violations found at the time of inspection will cause this Commission to charge the Service Center for administrative cases. Modification due to change of location. </small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif '> <b>2.</b> This Permit is not valid without payment of the prescribed fees and official dry seal of this Commission.</small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif'><b>3.</b> Renewal of Permit should be made at least two(2) months before expiration to avoid penalties. <br>     
   															[ Payment for Renewal if not expired: P1,950.00 ] </small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif'><b>4.</b> Paid under Or No. " . $or . " dated. " . $date . " amount " . $am . "</small><br>
														<small> Name of Technician : ".  $tech . " </small>"
														;
														 break;
																	  
													}

												?>
											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<table width="100%">
													<tbody>
														<tr>
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: width: 65%;">
																File No: <b> <?php echo $fileNo?></b>
															</td>
															<td style="text-align:left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; width: 35%; font-weight: bold;">
																DOCUMENTARY STAMP TAX PAID
															</td>
														</tr>
													</tbody>
												</table>

										
											</div>
											
										</div><!--printpage-->

							<div class="col-sm-12 col-md-12" id="record">
										<table class="data-table table responsive table-hover" id="tablerow">
											<thead>
												<tr>
													<th>File No</th>
													<th>Permit No</th>
													<th>Business Name</th>
													<th>Address</th>
													<th>Contact</th>
													<th>Date Issued</th>
													<th>Validity</th>
													<th>OrNo</th>
													<th>Amount</th>
													<th>Remarks</th>
													<th class="datatable-nosort">Action</th>
												</tr>
											</thead>

											<tbody>

						  
												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblmobile_permit.fileNo, tblmobile_permit.PermitNo, tblmobile_permit.Type,tblmobile_permit_records.Record_Id, tblmobile_permit_records.fileNo, tblmobile_permit_records.BusinessName, tblmobile_permit_records.Address, tblmobile_permit_records.ContactNo, tblmobile_permit_records.BusinessNo,tblmobile_permit_records.Owner, tblmobile_permit_records.DateIssued, tblmobile_permit_records.Validity, tblmobile_permit_records.OrNo, tblmobile_permit_records.Amount, tblmobile_permit_records.Remarks, tblmobile_permit_records.Status, tblmobile_permit_records.Technician, tblmobile_permit_records.Note FROM tblmobile_permit_records INNER JOIN tblmobile_permit ON tblmobile_permit_records.fileNo = tblmobile_permit.fileNo WHERE tblmobile_permit_records.fileNo = $id ORDER BY Record_Id DESC" ;
												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['fileNo'];

												      echo  "<tr'>
												      	<td>" . $row["fileNo"] . "</td> 
												      	<td>" . $row["PermitNo"] . "</td>
												      	<td>" . $row["BusinessName"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . $row["DateIssued"] . "</td>
												        <td>" . $row["Validity"] . "</td>
												       <td>" . $row["OrNo"]  .  "</td>
												       <td>" . $row["Amount"]  .  "</td>
												        <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update-mobile-permit.php?fileNo=" . $row['fileNo'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_mobile_delete_record.php?Record_Id=" . $row['Record_Id'] . "' name='deletebtn' id='deletebtn'>
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

	<script >
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


			window.onload = function(){
				$("#printpage").hide();
				if ($('#Ptype').val() == "MPSC") {
						$('#technician').show();
				}
				else
				{
					$('#technician').hide();
				}
			}

		
			$('#Ptype').change(function(){

				 document.getElementById("PermitNo").readOnly = false;

				if ($(this).val() == "MPSC") {
						$('#technician').show();  

						$('#tech').val('');
							<?php

				 				include("../../config/connection.php");
				  				$sql = "SELECT MAX(PermitNo) as no FROM tblmobile_permit WHERE Type = 'MPSC'" ;

				                $sqlmax  = mysqli_query($conn, $sql);
				                $rowmax = mysqli_fetch_assoc($sqlmax);
				             	$id = $rowmax['no'];	
							?>

						var string="<?php  echo $id?>";

						$('#PermitNo').val(string)

				}
				else if ($(this).val() == "MPRR")
				{
					$('#tech').val('');
					$('#technician').hide();
					<?php

				 				include("../../config/connection.php");
				  				$sql = "SELECT MAX(PermitNo) as no FROM tblmobile_permit WHERE Type = 'MPRR'" ;

				                $sqlmax  = mysqli_query($conn, $sql);
				                $rowmax = mysqli_fetch_assoc($sqlmax);
				             	$id = $rowmax['no'];	
							?>

						var string="<?php  echo $id?>";

						$('#PermitNo').val(string)
				}
				else if ($(this).val() == "MPD")
				{
					$('#tech').val('');
					$('#technician').hide();
					<?php

				 				include("../../config/connection.php");
				  				$sql = "SELECT MAX(PermitNo) as no FROM tblmobile_permit WHERE Type = 'MPD'" ;

				                $sqlmax  = mysqli_query($conn, $sql);
				                $rowmax = mysqli_fetch_assoc($sqlmax);
				             	$id = $rowmax['no'] ;	
							?>

						var string="<?php  echo $id?>";

						$('#PermitNo').val(string)
				}



			});
		});
	</script>

</body>
</html>