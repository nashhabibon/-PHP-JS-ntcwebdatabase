<?php
// Database connection establishment
   include("../../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
       
            $id = $_POST["IDno"];
            $Fname= $_POST["Fullname"];
            $Prk= $_POST["Prk"];
            $Brgy= $_POST["Brgy"];
            $City= $_POST["City"];
            $Province= $_POST["province"];
            $Contact= $_POST["Contact"];
            $Birth= $_POST["Birth"];
            $Citizenship = $_POST["Citizenship"];
            $Sex= $_POST["gender"];
            $Height= $_POST["Height"];
            $Weight= $_POST["Weight"];
            $Employer= $_POST["Employer"];
            $EmpAddress= $_POST["EmployerAddress"];
            $Placeofseminar= $_POST["Seminar"];
            $Dateofseminar = $_POST["DateOfSeminar"];
            $Rlmpno= $_POST["rlmpNo"];
            $DateIssued= $_POST["Issued"];
            $DateExpiry= $_POST["Expiry"];
            $Remarks= $_POST["Remarks"];
            $FormNo= $_POST["Form"];
            $OrNo= $_POST["RecieptNo"];
            $Amount= $_POST["amount"];
            $DatePd= $_POST["DatePaid"];
            $YearNo= $_POST["Year"];


            $sqlcheck = "Select * from tblrlmpoperatorinfo Where RlmpNo ='$Rlmpno'";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0 ) {
                # code...
                 echo json_encode(array("statusCode"=>1));   
            }

            else
            {   

                 $sqlselect = "SELECT City FROM tblCity WHERE CityId = '$City' ";
                $selectresult = mysqli_query($conn, $sqlselect);

                if ($selectresult && mysqli_num_rows($selectresult) > 0) {
                    # code...
                    while ($row = $selectresult -> fetch_assoc()) {

                        $resultprov = $row['City'];
                         //INSERT QUERY
                         $sql = "INSERT INTO tblrlmpoperatorinfo (IDno, RlmpNo, Fullname,Prk_St, Brgy, City, Province, ContactNo, Birthdate, Citizenship, Sex, Height, Weight, Employer, EmployerAddress, Placeofseminar, Dateofseminar) VALUES ('$id','$Rlmpno' , '$Fname', '$Prk', '$Brgy', '$resultprov','$Province', '$Contact', '$Birth', '$Citizenship', '$Sex', '$Height', '$Weight', '$Employer', '$EmpAddress', '$Placeofseminar', '$Dateofseminar' ) ";

                        $sql2 = "INSERT INTO tblrlmplicenseinfo (IDno, DateIssued, DateExpiry, Remarks, FormNo, OrNo, Amount, DatePaid, NoOfYears) VALUES ('$id' , '$DateIssued', '$DateExpiry', '$Remarks','$FormNo', '$OrNo', '$Amount', '$DatePd', '$YearNo') ";

                   

                        $result = mysqli_query($conn, $sql);
                        $result = mysqli_query($conn, $sql2);
                    

                        if ($result) 
                        {
                         
                         echo json_encode(array("statusCode"=>200));         

                        }
                        else
                        {
                                echo 'There were erros while saving the data.';
                        }

                        # code...
                    }
                }


            

            }

    }
    
    

     
    

?>
