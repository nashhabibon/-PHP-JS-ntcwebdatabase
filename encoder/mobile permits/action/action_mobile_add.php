	<?php
// Database connection establishment
   include("../../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
       
            $id = $_POST["IDno"];
            $BName= $_POST["BName"];
            $BAddress= $_POST["BAddress"];
            $BNo= $_POST["BNo"];
            $contact= $_POST["contactNo"];
            $owner= $_POST["owner"];
            $tech= $_POST["tech"];
            $Ptype= $_POST["Ptype"];
            $PermitNo= $_POST["PermitNo"];
            $dateIssued = $_POST["dateIssued"];
            $dateExpiry= $_POST["dateExpiry"];
            $Status= $_POST["Status"];
            $Remarks= $_POST["Remarks"];
            $OrNo= $_POST["OrNo"];
            $amount= $_POST["amount"];
            $datePaid= $_POST["datePaid"];
            $notes = $_POST["notes"];
           


            $sqlcheck = "SELECT * from tblmobile_permit Where PermitNo ='$PermitNo'";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0 ) {
                # code...
                 echo json_encode(array("statusCode"=>1));   
            }

            else
            {   
				$sql = "INSERT INTO tblmobile_permit_records(fileNo, BusinessName, Address, ContactNo, BusinessNo, Owner, DateIssued, Validity, OrNo, Amount, DatePaid, Remarks, Status, Technician, Note) VALUES ('$id','$BName','$BAddress','$contact','$BNo','$owner','$dateIssued','$dateExpiry','$OrNo','$amount','$datePaid', '$Remarks','$Status','$tech','$notes')";

                 $sql2 = "INSERT INTO tblmobile_permit (fileNo, PermitNo, Type) VALUES ('$id' , '$PermitNo', '$Ptype') ";

                   

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

            }

    }
    
           
?>
