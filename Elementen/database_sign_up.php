<?php
    // Create connection to database
    $conn = mysqli_connect($servername, $username, $password, $database);
            
    // Check connection to database
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        if(isset($DateBirth_Extrauserinput))
        {
            $sql = 'INSERT INTO `info` (User_Id, User_FirstName, User_LastName, User_EmailAdress, User_UserName, User_Password, User_DateBirth, User_Adress, User_City, User_Country, User_PhoneNumber) 
                    VALUES (null, "'.  $Firstname_Userinput . '", "'.  $Lastname_Userinput . '", "'.  $E_mail_Userinput . '", "'.  $Username_Userinput . '", "'.  $encrypted_Password . '", "'.  $DateBirth_Extrauserinput . '", "'.  $Adress_Extrauserinput . '", "'.  $City_Extrauserinput . '", "'.  $Country_Extrauserinput . '", "'.  $Telephonenumber_Extrauserinput . '")';
        }
        else
        {
            $sql = 'INSERT INTO `info` (User_Id, User_FirstName, User_LastName, User_EmailAdress, User_UserName, User_Password) 
                    VALUES (null, "'.  $Firstname_Userinput . '", "'.  $Lastname_Userinput . '", "'.  $E_mail_Userinput . '", "'.  $Username_Userinput . '", "'.  $encrypted_Password .'")';
        }
        

    $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        $createdAccount = true;
?>