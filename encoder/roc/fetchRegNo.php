<?php 

// Include the database config file 
include("../../config/connection.php");
 

if (isset($_POST['type']) && !empty($_POST['type'])) {

  $type = $_POST['type'];

    $sqltype = "SELECT * FROM tbl_roc_registration_no WHERE Type = '$type'";
    $sqlmax  = mysqli_query($conn, $sqltype);
    $rowmax = mysqli_fetch_array($sqlmax);
    $idno = $rowmax['ID'];
    $reg = $rowmax['RegistrationNo'] ;
    $yr = date("y");

  if (empty($reg))
   {
  
     $num = $yr .  "-" .  $type . "-1000" ;
     echo $num;
   }
   else
   {
     $a = str_replace($yr, "", $reg);
     $b = str_replace($type, "", $a);
     $c = str_replace("--", "", $b);
     $d = $c + 1;

     $regnum = $yr .  "-" .  $type . "-" .  $d ;
     echo $regnum;

   }
  
}

?>