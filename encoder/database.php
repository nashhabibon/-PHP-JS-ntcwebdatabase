<?php
// Start the session
   include("../config/session.php")
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
<link rel="stylesheet" type="text/css" href="../src/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../src/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/styles/style.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="../src/js-ajax/ajax.js"></script>

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
						<a class="dropdown-item" href="../logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="">
				<img src="../src/img/ntc-logo.png" width="50px">
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
						<a href="dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-database"></span><span class="mtext">Database</span>
						</a>
						<ul class="submenu ">
							<li><a href="">RLMP</a></li>
							<li><a href="roc/roc-dashboard.php">ROC</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="nav-label">RSL</span></a>
				                    <ul class="submenu">
				                        <li ><a href="#">Radio Station License</a></li>
				                        <li><a href="#">Ship Station License</a></li>
				                        <li><a href="#">Aircraft Station License</a></li>
				                    </ul>
				             </li>
							<li class=>
								<a href="mobile permits/mobile-permits.php">MOBILE PHONE</a>
				                   
				             </li>
							<li><a href="">DEALERS PERMIT</a></li>
							<li><a href="">AMATEUR</a></li>
						</ul>	
					</li>
					<li>
						<a href="" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-money"></span><span class="mtext">Payment</span>
						</a>
					</li>
				
					<li>
						<a href="users.php" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-users"></span><span class="mtext">Users</span>
						</a>
					</li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">

			<div class="title pb-20">
				<h2 class="h3 mb-0">Database</h2>
			</div>

			<div class="row pb-10">
			
			</div>
		</div>
	</div>
	<!-- js -->


	<script src="../src/scripts/process.js"></script>
	<script src="../src/scripts/core.js"></script>
	<script src="../src/scripts/script.min.js"></script>
	<script src="../src/scripts/layout-settings.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- Datatable Setting js -->
	<script src="../src/scripts/datatable-setting.js"></script>

</body>
</html>