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
							<li><a href="rlmp-dashboard.php" style="background-color: rgba(0,0,0,.4);">RLMP</a></li>
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
								<h4><i ></i>Radio Land Mobile Permit (RLMP)</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">RLMP</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="rlmp-add.php" class="btn btn-primary" id="add-new">
							<li class="fas fa fa-plus"></li>
									Add-new
								</a>
									<a href="#" class="btn btn-primary" id="add-new">
							<i class="fa fa-book" aria-hidden="true"></i>
									Report
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						
					</div>
					<div class="pb-20">
						<table class="data-table table responsive table-hover" id="tablerow">

							<thead>
								<tr>
									<th>No</th>
									<th>Fullname</th>
									<th>Brgy</th>
									<th>City</th>
									<th>Province</th>
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

  $sql = "SELECT tblrlmpoperatorinfo.IDno, tblrlmpoperatorinfo.RlmpNo, tblrlmpoperatorinfo.Fullname, tblrlmpoperatorinfo.Brgy, tblrlmpoperatorinfo.City, tblrlmpoperatorinfo.Province, tblrlmplicenseinfo.IDno, tblrlmplicenseinfo.DateIssued, tblrlmplicenseinfo.DateExpiry, tblrlmplicenseinfo.FormNo, tblrlmplicenseinfo.OrNo FROM tblrlmplicenseinfo INNER JOIN tblrlmpoperatorinfo ON tblrlmplicenseinfo.IDno = tblrlmpoperatorinfo.IDno WHERE tblrlmplicenseinfo.tblID = (SELECT MAX(tblID) as id FROM tblrlmplicenseinfo WHERE IDno = tblrlmpoperatorinfo.IDno) ";
             

  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) 
  {
    while ($row = $result -> fetch_assoc()) 
    {
      $id = $row['IDno'];
      $dateIssued = date_create($row["DateIssued"]);
      $dateValidity = date_create($row["DateExpiry"]);
      $name = utf8_encode( $row['Fullname']);	

      echo  "<tr>
      <td>" . $id  . "</td> 
      	<td>" . $name  . "</td> 
      	<td>" . $row["Brgy"] . "</td>
      	<td>" . $row["City"] . "</td>
      	<td>" . $row["Province"] . "</td>
      	<td><span class='badge bg-success text-light'>" . $row["RlmpNo"] . "</span></td>
       <td>" . date_format($dateIssued,"m/d/Y ") . "</td>
	    <td id='dateexpiry' name='dateexpiry'>" . date_format($dateValidity,"m/d/Y ") . "</td>
         <td>" . $row["FormNo"] . "</td>
          <td>" . $row["OrNo"] . "</td>
       <td>" .

        "<div class='dropdown'>
                      <a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' ' role='button' data-toggle='dropdown'>
                        <i class='dw dw-more'></i>
                      </a>
                      <div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
                        <a class='dropdown-item' href='rlmp-update.php?IDno=" . $row['IDno'] . "'  name='editbtn' id='editbtn'><i class='dw dw-edit2'></i> View</a>
                       <a class='dropdown-item' href='action/action-rlmp-delete-operator.php?IDno=" . $row['IDno'] . "' name='deletebtn' id='deletebtn'>
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
				</div>

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