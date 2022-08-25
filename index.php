<?php 
	
	include("config/connection.php");

	if (isset($_POST['submit']))  
	{
		# code...
		$username = $_POST['Username'];
		$pass = $_POST['Password'];

		$sql = "Select * from tblaccount where UserName = '$username' and Password = '$pass'" ;
		$result = mysqli_query($conn, $sql);
		$row  = mysqli_fetch_array($result);
		$uId = $row['userId']; 
		$Fname = $row['FullName'];
		$Type = $row['AccType'];

			if ($result && mysqli_num_rows($result) > 0) 
			{
						session_start();
						
						$_SESSION['userId'] = $uId;
						$_SESSION['FullName'] = $Fname;
						$_SESSION['AccType'] = $Type;

						if ($_SESSION['AccType'] == "Admin")
						 {
							header("location: admin/admin-dashboard.php");
							die();
						 }

						else if ($_SESSION['AccType'] == "Encoder") {
							header("location: encoder/dashboard.php");
								die();
						}

						else
						{
						header("location: user.php");
						die();
						}

			}
			else
			{
				$error = "Your Login Name or Password is invalid";

			}
		
		
	}
	else
	{
		$error = "";
	}
 ?>

<!DOCTYPE html>

<html>

<head>
 <link rel="stylesheet" type="text/css" href="src/styles/index.css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>National Telecommunications Commission</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Modal HTML -->

	<div class="login-box">
	  <h2>Member Login</h2>
	  <form action="" method="POST">
	    <div class="user-box">
	      <input type="text" name="Username" required="required" autocomplete="off">
	      <label>Username</label>
	    </div>
	    <div class="user-box">
	      <input type="password" name="Password" required="required" autocomplete="off">
	      <label>Password</label>
	    </div>
	    <div style="font-size:11px;color:#cc0000; margin-top:10px" class="error"><?php echo $error; ?></div>       
	    <div class="center">
      			<button class="btn" name="submit" type="submit">
        		<svg width="100px" height="40px" viewBox="0 0 180 60" class="border">
          		<polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          		<polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        		</svg>
        		<span>Login</span>
      			</button>
   		</div>
	  </form>
	 	
		<div class="footer">
			<a class="forgot" href="#">Forgot Password?</a>
		</div>
	</div>
	
</body>
</html>
