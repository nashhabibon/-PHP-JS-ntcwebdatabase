
<?php
// Database connection establishment
   include("../../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
        
            $RId = $_POST["RecordId"];
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
            $notes = $_POST["note"];


            $sqlcheck = "SELECT * from tblmobile_permit_records WHERE fileNo = '$id' AND OrNo = '$OrNo'";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0) 
            {

              $sqlcheck_permitno = "SELECT PermitNo, fileNo from tblmobile_permit WHERE fileNo = '$id' AND PermitNo = '$PermitNo'";
              $query_run = mysqli_query($conn, $sqlcheck_permitno);

                if (mysqli_num_rows($query_run) > 0) {
                    # code...

                      $sqlUpdate = "UPDATE tblmobile_permit_records SET BusinessName='$BName',Address='$BAddress',ContactNo='$contact',BusinessNo='$BNo',Owner='$owner',DateIssued='$dateIssued',Validity='$dateExpiry',Amount='$amount', DatePaid='$datePaid' ,Remarks='$Remarks',Status='$Status',Note='$notes' WHERE Record_Id = $RId";

                      $result = mysqli_query($conn, $sqlUpdate);
                   
                        if ($result) 
                        {
                            echo json_encode(array("statusCode"=>203)); 
                        }
                        else
                        {

                            echo json_encode(array("statusCode"=>202)); 
                        }
                }
                else
                {

                    $sqlcheck = "SELECT * from tblmobile_permit Where PermitNo ='$PermitNo'";
                    $sqlrun = mysqli_query($conn, $sqlcheck);

                    if (mysqli_num_rows($sqlrun) > 0 ) {
                        # code...
                         echo json_encode(array("statusCode"=>204));   
                    }

                    else
                    {
                        $sqlUpdatePno = "UPDATE tblmobile_permit SET PermitNo='$PermitNo',Type='$Ptype' WHERE fileNo = '$id' ";
                        $query_run = mysqli_query($conn, $sqlUpdatePno);

                        $sqlUpdatePno2 = "UPDATE tblmobile_permit_records SET BusinessName='$BName',Address='$BAddress',ContactNo='$contact',BusinessNo='$BNo',Owner='$owner',DateIssued='$dateIssued',Validity='$dateExpiry',Amount='$amount', DatePaid='$datePaid' ,Remarks='$Remarks',Status='$Status',Note='$notes' WHERE Record_Id = $RId";
                        $query_run = mysqli_query($conn, $sqlUpdatePno2);


                        if ($query_run) 
                        {
                         
                         echo json_encode(array("statusCode"=>203));         

                        }
                        else
                        {
                               echo json_encode(array("statusCode"=>202));
                        }  
                    }
                }

            }

            else
            {
                 $sqlcheck_permitno = "SELECT PermitNo, fileNo from tblmobile_permit WHERE fileNo = '$id' AND PermitNo = '$PermitNo'";
                 $query_run = mysqli_query($conn, $sqlcheck_permitno);


                if (mysqli_num_rows($query_run) > 0) {
                    # code...
                        
                        //Create Record
                       $sql = "INSERT INTO tblmobile_permit_records(fileNo, BusinessName, Address, ContactNo, BusinessNo, Owner, DateIssued, Validity, OrNo, Amount, DatePaid, Remarks, Status, Technician, Note) VALUES ('$id','$BName','$BAddress','$contact','$BNo','$owner','$dateIssued','$dateExpiry','$OrNo','$amount', '$datePaid','$Remarks','$Status','$tech','$notes')";

                        $result = mysqli_query($conn, $sql);
                   
                        if ($result) 
                        {
                            echo json_encode(array("statusCode"=>201)); 
                        }
                        else
                        {

                            echo json_encode(array("statusCode"=>202)); 
                        }
                }
                else
                {
                    $sqlcheck = "SELECT * from tblmobile_permit Where PermitNo ='$PermitNo'";
                    $sqlrun = mysqli_query($conn, $sqlcheck);

                    if (mysqli_num_rows($sqlrun) > 0 ) {
                        # code...
                         echo json_encode(array("statusCode"=>204));   
                    }
                    else
                    {
                        $sqlUpdatePno = "UPDATE tblmobile_permit SET PermitNo='$PermitNo',Type='$Ptype' WHERE fileNo = '$id' ";
                        $query_run = mysqli_query($conn, $sqlUpdatePno);

                          //Create Record
                       $sqlUpdatePno2 = "INSERT INTO tblmobile_permit_records(fileNo, BusinessName, Address, ContactNo, BusinessNo, Owner, DateIssued, Validity, OrNo, Amount, DatePaid ,Remarks, Status, Technician, Note) VALUES ('$id','$BName','$BAddress','$contact','$BNo','$owner','$dateIssued','$dateExpiry','$OrNo','$amount', '$datePaid',  '$Remarks','$Status','$tech','$notes')";
                         $query_run = mysqli_query($conn, $sqlUpdatePno2);
                   
                        if ($query_run) 
                        {
                            echo json_encode(array("statusCode"=>201)); 
                        }
                        else
                        {

                            echo json_encode(array("statusCode"=>202)); 
                        }


                    }


                }

                 

            }
        
    }

?>
