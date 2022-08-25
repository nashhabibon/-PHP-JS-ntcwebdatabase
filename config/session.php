	<?php
// Start the session
session_start();
if (!isset($_SESSION['userId'])) 
{
  header("Location: ../index.php");  

   include("../config/connection.php");

  $sql = "SELECT * FROM tblaccount";
  $result = mysqli_query($conn, $sql);
}
?>
