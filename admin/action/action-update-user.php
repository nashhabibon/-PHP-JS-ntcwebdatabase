
<?php
// Database connection establishment
   include("../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
        
            $userId = $_POST["userid"];
            $Uname= $_POST["username"];
            $fname= $_POST["fullname"];
            $contact= $_POST["contact"];
            $email= $_POST["email"];
            $Pass= $_POST["password"];
            $AccType= $_POST["acctype"];


             $sqlcheck = "Select * from tblaccount Where Username ='$Uname' and userId='$userId'" ;
            $sqlrun = mysqli_query($conn, $sqlcheck);


            if (mysqli_num_rows($sqlrun) > 0 ) {
                #if match id to username
                //UPDATE QUERY 
                    $sql = "UPDATE tblaccount SET FullName = '$fname', Contact='$contact', Email='$email', Username='$Uname', Password='$Pass', AccType='$AccType' WHERE userId = '$userId' ";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo json_encode(array("statusCode"=>200)); 
                    }
                    else{

                        echo 'There were erros while saving the data.';
                    }

            }

            elseif (mysqli_num_rows($sqlrun) <= 0) {
                # if not match, check if username already exist
                $sqlcheckuname = "Select * from tblaccount Where Username ='$Uname'";
                $sqlruncheck = mysqli_query($conn, $sqlcheckuname);

                if (mysqli_num_rows($sqlruncheck) > 0) {
                    # if username already exist
                        echo 'username already used by other user';
                }
                else
                {
                     # if not username already exist
                    //UPDATE QUERY 
                    $sql = "UPDATE tblaccount SET FullName = '$fname', Contact='$contact', Email='$email', Username='$Uname', Password='$Pass', AccType='$AccType' WHERE userId = '$userId' ";
                    $result = mysqli_query($conn, $sql);

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
      
    }

?>
