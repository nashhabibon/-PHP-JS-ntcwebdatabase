<?php
// Database connection establishment
   include("../../config/connection.php");

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST))
    {  
       
            $id = $_POST["userid"];
            $Uname= $_POST["username"];
            $fname= $_POST["fullname"];
            $contact= $_POST["contact"];
            $email= $_POST["email"];
            $Pass= $_POST["password"];
            $AccType= $_POST["acctype"];

            $sqlcheck = "Select * from tblaccount Where Username ='$Uname'";
            $sqlrun = mysqli_query($conn, $sqlcheck);

            if (mysqli_num_rows($sqlrun) > 0 ) {
                # code...
                 echo 'already Exist';
            }

            else
            {   

             //INSERT QUERY
                $insert = "INSERT INTO tblaccount (userId, FullName, Contact, Email, Username, Password, AccType) VALUES ('$id','$fname' , '$contact', '$email', '$Uname','$Pass', '$AccType') ";
                $result = mysqli_query($conn, $insert);

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
