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
							
							<li>
								<a href="../mobile permits/mobile-permits.php" >MOBILE PHONE</a>
				                   
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
								<h4><i class="micon dw dw-user1 mtext"></i> Restricted Radio Operator Certificate</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">ROC Dashboard</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="roc_addform.php" class="btn btn-primary" id="add-new">
							<li class="fas fa fa-plus"></li>
									Add-new
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="tabs-container">
						<ul class="nav nav-tabs responsive" role="tablist">
							<li class="nav-item"><a href="#groc" class="nav-link active" data-toggle="tab" role="tab" >GROC</a></li>
							<li class="nav-item"><a href="#srop" class="nav-link" data-toggle="tab" role="tab">SROP</a></li>
							 <li class="nav-item dropdown">
							    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PHN</a>
							    <div class="dropdown-menu">
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#phn-1">1PHN</a>
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#phn-2">2PHN</a>
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#phn-3">3PHN</a>
							    </div>
							  </li>
							<li class="nav-item"><a href="#rmap" class="nav-link " data-toggle="tab" role="tab">RMAP</a></li>
							<li class="nav-item dropdown">
							    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">RTG</a>
							    <div class="dropdown-menu">
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#rtg-1">1RTG</a>
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#rtg-2">2RTG</a>
							      <a class="dropdown-item " data-toggle="tab" role="tab" href="#rtg-3">3RTG</a>
							    </div>
							  </li>
							
						</ul>
						<div class="tab-content">
							<div role="tabpanel" id="groc" class="tab-pane active" >
								<!-- Simple Datatable start -->
										
										<div class="pd-20">
											
										</div>
										<div class="pb-20">
											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='GROC' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- groc -->
							<div role="tabpanel" id="srop" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='SROP' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- srop -->
							<div role="tabpanel" id="phn-1" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='1PHN' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- 1phn -->
							<div role="tabpanel" id="phn-2" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='2PHN' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- 2phn -->
							<div role="tabpanel" id="phn-3" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='3PHN' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- 3phn -->
							<div role="tabpanel" id="rmap" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='RMAP' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- Rmap -->
							<div role="tabpanel" id="rtg-1" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='1RTG' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- rtg-1 -->
							<div role="tabpanel" id="rtg-2" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='2RTG' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- rtg-2 -->
							<div role="tabpanel" id="rtg-3" class="tab-pane">
								<!-- Simple Datatable start -->
									
										<div class="pd-20">
											
										</div>
										<div class="pb-20">

											<table class="data-table table responsive table-hover" id="tablerow">

												<thead>
													<tr>
														<th>ID</th>
														<th>Registration No</th>
														<th>Full Name</th>
														<th>Address</th>
														<th>ContactNo</th>
														<th>Date Issued</th>
														<th>Date Expiry</th>
														<th>FormNo</th>
														<th>O.R No</th>
														<th>Status</th>
														<th class="datatable-nosort">Action</th>
													</tr>
												</thead>

												<tbody>

												<!-- Fetch Data -->

												<?php 
												  include("../../config/connection.php");
												  $sql = "SELECT tblrocoperatorinfo.IDno, tblrocoperatorinfo.Firstname, tblrocoperatorinfo.MiddileInitial,tblrocoperatorinfo.Lastname,tblrocoperatorinfo.Type,tblrocoperatorinfo.RegistrationNo,tblrocoperatorinfo.Address,tblrocoperatorinfo.ContactNo,tblrocoperatorinfo.Birthdate,tblrocoperatorinfo.Citizenship,tblrocoperatorinfo.Sex,tblrocoperatorinfo.Height,tblrocoperatorinfo.Weight,tblrocoperatorinfo.ExamDate,tblrocoperatorinfo.ExamPlace,tblrocoperatorinfo.ExamRating, tblroclicenseinfo.tblID, tblroclicenseinfo.IDno, tblroclicenseinfo.FormNo, tblroclicenseinfo.DateIssued, tblroclicenseinfo.DateExpiry, tblroclicenseinfo.Amount, tblroclicenseinfo.OrNo,tblroclicenseinfo.Remarks
 
												  FROM tblroclicenseinfo 
												  INNER JOIN tblrocoperatorinfo
												  ON tblroclicenseinfo.IDno = tblrocoperatorinfo.IDno
												  WHERE tblrocoperatorinfo.Type ='3RTG' AND tblroclicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblroclicenseinfo WHERE tblID = tblrocoperatorinfo.IDno  )  ";

												  $result = mysqli_query($conn, $sql);

												  if ($result && mysqli_num_rows($result) > 0) 
												  {
												    while ($row = $result -> fetch_assoc()) 
												    {
												      $id = $row['tblID'];
												      $dateIssued = date_create($row['DateIssued']);
												      $dateValidity = date_create($row['DateExpiry']);

												      echo  "<tr'>
												      	<td>" . $id . "</td> 
												      	<td style='width: 10%'>" . $row["RegistrationNo"] . "</td>
												      	<td>" . $row["Firstname"] . ' ' .  $row["MiddileInitial"] . ' ' . $row["Lastname"] . "</td>
												      	<td>" . $row["Address"] . "</td>
												      	<td>" . $row["ContactNo"] . "</td>
												       	<td>" . date_format($dateIssued,"m/d/Y ") . "</td>
												        <td >" . date_format($dateValidity,"m/d/Y ") . "</td>
												          <td>" . $row["FormNo"] . "</td>
												         <td>" . $row["OrNo"] . "</td>
												      
												       <td>" . $row["Remarks"]  .  "</td>
												       <td>" .

												        "<div class='dropdown'>
												                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
												                        <i class='dw dw-more'></i>
												                      </a>
												                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												                        <a class='dropdown-item' href='update_roc?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
												                       <a class='dropdown-item' href='action/action_roc_delete.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
							</div> <!-- rtg-3 -->
							

						</div><!-- tab-content -->
					</div><!-- tab-container -->
				</div><!--card-box mb-30 -->
				<!-- Simple Datatable End -->
			</div><!-- min-height-200px -->
		</div><!-- pd-ltr-20 xs-pd-20-10 -->
	</div><!-- main-container -->
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