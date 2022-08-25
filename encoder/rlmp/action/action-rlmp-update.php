
<?php
// Database connection establishment
   include("../../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
        
            $id = $_POST["Idno"];
            $Fname= $_POST["fullname"];
            $prk= $_POST["Prk"];
            $brgy= $_POST["brgy"];
            $city= $_POST["city"];
            $province= $_POST["province"];
            $contact= $_POST["contact"];
            $birth= $_POST["birth"];
            $citizenship = $_POST["Citizenship"];
            $sex= $_POST["gender"];
            $height= $_POST["height"];
            $weight= $_POST["weight"];
            $employer= $_POST["employer"];
            $empAddress= $_POST["employeraddress"];
            $placeofseminar= $_POST["seminar"];
            $dateofseminar = $_POST["dateOfSeminar"];
            $rlmpno= $_POST["rlmpNo"];
            $dateIssued= $_POST["issued"];
            $dateExpiry= $_POST["expiry"];
            $remarks= $_POST["remarks"];
            $formNo= $_POST["formno"];
            $orNo= $_POST["recieptno"];
            $amount= $_POST["amount"];
            $datapaid= $_POST["DatePaid"];
            $tblid = $_POST["tblid"];

            $sqlcheck = "SELECT FormNo from tblrlmplicenseinfo WHERE FormNo = '$formNo' ";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0) {

                $sqlselect = "SELECT City FROM tblCity WHERE CityId = '$city' ";
             

                $selectresult = mysqli_query($conn, $sqlselect);
              
                if ($selectresult && mysqli_num_rows($selectresult) > 0) {
                    # code...
                    while ($row = $selectresult -> fetch_assoc()) {
                        # code...
                         $resultprov = $row['City'];
                         
                        $sqlupdate = "UPDATE tblrlmplicenseinfo SET DateIssued='$dateIssued',DateExpiry='$dateExpiry', Remarks='$remarks', OrNo='$orNo', Amount=' $amount', DatePaid='$datapaid' WHERE tblID = '$tblid '";

                         $sqlupdate2 = "UPDATE tblrlmpoperatorinfo SET RlmpNo='$rlmpno',Fullname='$Fname',Prk_St='$prk',Brgy='$brgy',City='$resultprov',Province='$province',ContactNo='$contact',Birthdate='$birth',Citizenship='$citizenship',Sex='$sex',Height='$height',Weight='$weight',Employer='$employer',EmployerAddress='$empAddress',Placeofseminar='$placeofseminar',Dateofseminar='$dateofseminar' WHERE IDno = '$id' ";

                         $Upresult = mysqli_query($conn, $sqlupdate);
                         $Upresult = mysqli_query($conn, $sqlupdate2);

                            if ($Upresult) {
                                echo json_encode(array("statusCode"=>200)); 
                            }
                            else{

                                echo json_encode(array("statusCode"=>201)); 
                            }

                        }
                }
                else
                {

                        $sqlupdate = "UPDATE tblrlmplicenseinfo SET DateIssued='$dateIssued',DateExpiry='$dateExpiry', Remarks='$remarks', OrNo='$orNo', Amount=' $amount', DatePaid='$datapaid' WHERE tblID = '$tblid '";

                         $sqlupdate2 = "UPDATE tblrlmpoperatorinfo SET RlmpNo='$rlmpno',Fullname='$Fname',Prk_St='$prk',Brgy='$brgy',City='$city',Province='$province',ContactNo='$contact',Birthdate='$birth',Citizenship='$citizenship',Sex='$sex',Height='$height',Weight='$weight',Employer='$employer',EmployerAddress='$empAddress',Placeofseminar='$placeofseminar',Dateofseminar='$dateofseminar' WHERE IDno = '$id' ";

                         $Upresult = mysqli_query($conn, $sqlupdate);
                         $Upresult = mysqli_query($conn, $sqlupdate2);

                            if ($Upresult) {
                                echo json_encode(array("statusCode"=>200)); 
                            }
                            else{

                                echo json_encode(array("statusCode"=>201)); 
                            }

                }
                
            }

            else
            {

                 //UPDATE QUERY 
                    $sql = "UPDATE tblrlmpoperatorinfo SET RlmpNo='$rlmpno',Fullname='$Fname',Prk_St='$prk',Brgy='$brgy',City='$city',Province='$province',ContactNo='$contact',Birthdate='$birth',Citizenship='$citizenship',Sex='$sex',Height='$height',Weight='$weight',Employer='$employer',EmployerAddress='$empAddress',Placeofseminar='$placeofseminar',Dateofseminar='$dateofseminar' WHERE IDno = '$id' ";

                    $sql2 = "INSERT INTO tblrlmplicenseinfo (IDno, DateIssued, DateExpiry, Remarks, FormNo, OrNo, Amount, DatePaid) VALUES ('$id', '$dateIssued', '$dateExpiry', '$remarks','$formNo', '$orNo', '$amount', '$datapaid') ";


                    $result = mysqli_query($conn, $sql);
                    $result = mysqli_query($conn, $sql2);
                    if ($result) {
                        echo json_encode(array("statusCode"=>202)); 
                    }
                    else{

                        echo json_encode(array("statusCode"=>201)); 
                    }
                 
            }
        
    }

?>
