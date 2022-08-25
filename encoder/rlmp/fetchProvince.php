<?php 

// Include the database config file 
include("../../config/connection.php");
 

if (isset($_POST['countryId']) && !empty($_POST['countryId'])) {

  $ProvId = $_POST['countryId'];

  $query = "SELECT * FROM tblcity WHERE Province = '$ProvId' ORDER BY City ASC";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    echo '<option value="">Select City</option>'; 
    while ($row = $result->fetch_assoc()) {
      echo '<option value="'.$row['CityId'].'">'.$row['City'].'</option>'; 
    }
  } else {
    echo '<option value="">City not available</option>'; 
  }
}

 elseif(isset($_POST['stateId']) && !empty($_POST['stateId'])) {

  $CityId = $_POST['stateId'];


  $query = "SELECT * FROM tblbrgy WHERE CityId = '$CityId' ORDER BY Brgy ASC";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    echo '<option value="">Select Brgy</option>'; 
    while ($row = $result->fetch_assoc()) {
      echo '<option value="'.$row['brgy'].'">'.$row['brgy'].'</option>'; 
    }
  } else {
    echo '<option value="">City not available</option>'; 
  }
}



?>