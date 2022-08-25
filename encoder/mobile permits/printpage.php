<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
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

</body>
</html>