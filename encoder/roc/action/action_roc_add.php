<?php
// Database connection establishment
   include("../../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
       
            $id = $_POST["IDno"];
            $Fname= $_POST["Firstname"];
            $Mname= $_POST["MiddleInitial"];
            $Lname= $_POST["Lastname"];
            $Type= $_POST["type"];
            $Address= $_POST["address"];
            $Contact= $_POST["Contact"];
            $Birth= $_POST["Birth"];
            $Citizenship = $_POST["Citizenship"];
            $Sex= $_POST["gender"];
            $Height= $_POST["Height"];
            $Weight= $_POST["Weight"];
            $ExamPlace= $_POST["PlaceSeminar"];
            $Dateofseminar = $_POST["DateOfSeminar"];
            $Examrating = $_POST["ExamRating"];
            $regNo= $_POST["regNO"];
            $DateIssued= $_POST["Issued"];
            $DateExpiry= $_POST["Expiry"];
            $Remarks= $_POST["Remarks"];
            $FormNo= $_POST["Form"];
            $OrNo= $_POST["RecieptNo"];
            $Amount= $_POST["amount"];
            $DatePd= $_POST["DatePaid"];


            $sqlcheck = "Select * from tblrocoperatorinfo Where RegistrationNo ='$regNo'";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0 ) {
                # code...
                 echo json_encode(array("statusCode"=>1));   
            }

            else
            {   
                  $sql = "INSERT INTO tblrocoperatorinfo (IDno, Firstname, MiddileInitial,Lastname, Type, RegistrationNo, Address, ContactNo, Birthdate, Citizenship, Sex, Height, Weight, ExamDate, ExamPlace, ExamRating) VALUES ('$id','$Fname' , '$Mname', '$Lname', '$Type', '$Address', '$Contact','$Birth', '$Citizenship', '$Sex', '$Height', '$Weight', '$ExamPlace', '$Dateofseminar', '$Examrating') ";

$sql2 = "INSERT INTO tblroclicenseinfo (IDno, FormNo, DateIssued,DateExpiry, Amount, OrNo, OrDate, Remarks) VALUES ('$id','$FormNo' , '$DateIssued', '$DateExpiry', '$Amount', '$OrNo', '$DatePd','$Remarks') ";


$result = mysqli_query($conn, $sql2);

                        $result = mysqli_query($conn, $sql);
                        

                        if ($result) 
                        {
                         
                         echo json_encode(array("statusCode"=>200));         

                        }
                        else
                        {
                                echo json_encode(array("statusCode"=>202));   
                        }

            }

    }
    
?>
