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
	 <!-- Script to print the content of a div -->
    <script>
        function printDiv() {
            var divContents = document.getElementById("printpage").innerHTML;
            var a = window.open('', '', '');
            a.document.write('<html>');
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
							<li><a href="">ROC</a></li>
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
				
	  <?php

		  	include("../../config/connection.php");
         
                $id = $_GET['RecordId'];

                 $query  = "SELECT tblmobile_permit.fileNo, tblmobile_permit.PermitNo, tblmobile_permit.Type, tblmobile_permit_records.Record_Id, tblmobile_permit_records.fileNo, tblmobile_permit_records.BusinessName, tblmobile_permit_records.Address, tblmobile_permit_records.ContactNo, tblmobile_permit_records.BusinessNo,tblmobile_permit_records.Owner, tblmobile_permit_records.DateIssued, tblmobile_permit_records.Validity, tblmobile_permit_records.OrNo, tblmobile_permit_records.Amount, tblmobile_permit_records.Remarks, tblmobile_permit_records.Status, tblmobile_permit_records.Technician, tblmobile_permit_records.Note FROM tblmobile_permit_records INNER JOIN tblmobile_permit ON tblmobile_permit_records.fileNo = tblmobile_permit.fileNo WHERE tblmobile_permit_records.Record_Id = $id ";
             
               
                $query_run = mysqli_query($conn, $query);
                $row= mysqli_fetch_array($query_run);
                $fileNo = $row['fileNo'];
                $record_id = $row['Record_Id'];
                $tech = $row['Technician'];
            ?>

				<!-- Simple Datatable start -->
			<div class="card-box mb-20">
					

					<div class="pb-20" >
						
							<div class="row" style="margin: 0px 10px 0px 10px;">
								<div class="col-lg-12" >
									<div class="row">
										<div class="col-md-6 col-sm-12 ">
											<input type="hidden" name="IDno" value="<?php echo $id?>" id="IDno">
											
											</div>

											<div class="col-md-6 col-sm-12 text-right" style="margin-bottom: 10px;">
													<div class="form-group">
														<i class="fa fa-floppy-o" aria-hidden="true">
														<input type="button" class="btn-link " value="Print" id="btn-updateMobile" onclick="printDiv()" style="color: #555; text-decoration: none; outline: 0!important; background-color: transparent; border: 1px solid transparent;"></i> |

														 <a href="mobile-permits.php" role="button" style="padding-right: 10px;"> <i class="fa fa-window-close" aria-hidden="true"></i> Close</a>
													</div>	

											</div>


										<div class="col-sm-12 col-md-7">

											<div class="col-sm-12 col-md-12">
												<!-- Header -->
												<table width="100%" border="0" cellpadding='2' cellspacing="2" align="center" bgcolor="#ffffff" style="padding-top:4px; margin-bottom: 30px; ">
													<tbody>
														
														<tr>
															
															<td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 
												18px; vertical-align: bottom; text-align: center; ">
																<br>REPUBLIC OF THE PHILIPPINES
																<h5 style="font-size:16px; font-family:Times New Roman">NATIONAL TELECOMMUNICATIONS COMMISSION</h5>
																Regional Office XI - Quimpo Blvd., Ecoland, Matina Davao City
																<br>(082) 296-0625 (telefax) ; 299-2614 
															</td>

														</tr>
														<tr>
															<td height="2" colspan="0" style="border-bottom:1px  #e4e4e4; "></td>
														</tr>
													</tbody>
												</table>

											</div>

										<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;" id="printpage">
											<div class="col-sm-12 col-md-12" >
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
											<div class="col-sm-12 col-md-11" style="text-align: right;">
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
															<td style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;width: 25%;">
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
												<h6 style="text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;"> DOCUMENTARY STAMP TAX PAID</h6>
												<h6 style="text-align: right; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;"> <?php
													include("../../config/connection.php");
         
									                $query  = "SELECT * from tblntcemployee WHERE Position = 'Regional Director'";
									                $query_run = mysqli_query($conn, $query);
									                $row= mysqli_fetch_array($query_run);
									                $name = utf8_encode( $row['Name']);
									               
									               	echo $name;
												?>
												</h6>
												<p style="text-align: right; font-size: 13px; color: #5b5b5b; font-family: 'Open Sans', sans-serif;"> <?php
													$pos = utf8_encode( $row['Position']);
									               	echo $pos;
												?>
												</p>
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
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>5.</b>Paid under Or No._________ dated. ____________ amount_______________</small>";
														 break;

													case "MPRR":
													echo "<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><b>1.</b> Renewal of Permit should be made at least two(2) months before expiration to avoid penalties.  <br/> 
															[ Payment for Renewal if not expired: P3,030.00 ] </small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '> <br/> <b>2.</b> The Retailer/Reseller is subject to ocular inspection at any reasonable time by the authorized NTC representative(s).<br/>
  															 Any violations found at the time of inspection will cause this Commission to charge the Retailer/Reseller for administrative cases.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>3.</b> This Permit is not valid without payment of the prescribed fees and official dry seal of this Commission.</small>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; '><br/> <b>4.</b> Paid under Or No._________ dated. ____________ amount_______________</small>";
														 break;

													case "MPSC":
													echo "<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif'> <b>1.</b> The Service Center is subject to ocular inspection at any reasonable time by the authorized NTC representative(s). <br> 
															 Any violations found at the time of inspection will cause this Commission to charge the Service Center for administrative cases. Modification due to change of location. </small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif '> <b>2.</b> This Permit is not valid without payment of the prescribed fees and official dry seal of this Commission.</small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif'><b>3.</b> Renewal of Permit should be made at least two(2) months before expiration to avoid penalties. <br>     
   															[ Payment for Renewal if not expired: P1,950.00 ] </small><br>
														<small style='text-align: left; font-size: 15px; color: #5b5b5b; font-family: 'Open Sans', sans-serif'><b>4.</b> Paid under Or No._________ dated. ____________ amount_______________</small><br>
														<small> Name of Technician : ".  $tech . " </small>"
														;
														 break;
																	  
													}

												?>
											</div>
											<div class="col-sm-12 col-md-12" style="padding-bottom: 10px;">
												<small style="text-align:right; font-size: 15px; color: #5b5b5b;font-family: 'Open Sans', sans-serif; "> 
													File No: <?php echo $fileNo?>
												</small>
												
											</div>
											
										</div><!--printpage-->
											
										</div><!--close col-sm-12 col-md-7-->

											
																		
									</div><!--close row-->
								</div>
							</div><!--close row-->
					

							
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

	

</body>
</html>