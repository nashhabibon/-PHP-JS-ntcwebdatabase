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
			<a href="admin-dashboard.php">
				<img src="../src/img/ntc-logo.png" width="50px" >
				<h4 style="color: #160909;font-size: 20px;padding: 15px"> Admin</h4>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="admin-dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="technician.html" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-database"></span><span class="mtext">Database</span>
						</a>
					</li>
				
					<li>
						<a href="payment.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-money"></span><span class="mtext">Payment</span>
						</a>
					</li>
				
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-bar-chart"></span><span class="mtext">reports</span>
						</a>
						<ul class="submenu">
							<li><a href="bar.html">Bar Chart</a></li>
							<li><a href="pie.html">Pie Chart</a></li>
						</ul>
					</li>
					<li>
						<a href="users.php" class="dropdown-toggle no-arrow" style="background-color: rgba(0,0,0,.4);">
							<span class="micon fa fa-users"></span><span class="mtext">Users</span>
						</a>
					</li>
				
				</ul>
			</div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container" id="add-user">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4><i class="micon dw dw-user1 mtext"></i> Manage Users</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
									<li class="breadcrumb-item "><a href="users.php">Users</a></li>
									<li class="breadcrumb-item active " aria-current="page">Add Users</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								
							</div>
						</div>
					</div>
				</div>
<?php

 				include("../config/connection.php");
  				$sql = "SELECT MAX(userId) as id FROM tblaccount";
                $sqlmax  = mysqli_query($conn, $sql);
                $rowmax = mysqli_fetch_array($sqlmax);
             	$id = $rowmax['id'] + 1;	
?>
				<!-- Simple Datatable start -->

				<div class="card-box mb-20">
					<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4><i class="fas fa fa-user-plus mtext"></i> Add Users</h4>
							</div>
						</div>
					</div>
					</div>

					<div class="pb-20">
						<form id="add-form">
							<div class="input-group custom">
								<input type="hidden" name="userid" value="<?php echo $id ?>" id="userid">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Full Name</label>
										<input class="form-control form-control-lg" type="text" name="fullname" autocomplete="off" id="fullname" required >
									</div>
								</div>

								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Contact</label>
										<input class="form-control form-control-lg" type="text" name="contact" autocomplete="off" id="contact" required >
									</div>
								</div>

								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Acct. Type</label>
										<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" title="Not Chosen" name="acctype" autocomplete="off" id="acctype" required>
										<option value="Admin">Admin</option>
										<option value="Encoder">Encoder</option>
										<option value="Engineer">Engineer</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control form-control-lg" type="text" name="email" autocomplete="off" id="email" required>
									</div>
								</div>
										
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Username</label>
										<input class="form-control form-control-lg" type="text" name="username" autocomplete="off" id="username" required>
										<span id="usernameResult" style="color:red;"></span>
									</div>
								</div>

								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Password</label>
										<input class="form-control form-control-lg" type="password" name="password" autocomplete="off" id="password" required>
									</div>
								</div>
											
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="button" class="btn btn-primary" value="Submit"  id="btn-add" >
										<a href="users.php" class="btn btn-danger">Close</a>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>
				<!-- Simple Datatable End -->
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
