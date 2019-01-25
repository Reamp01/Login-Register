<?php

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

    $sql = 'SELECT * FROM `info` where User_UserName="'. $Username_Login .'" ';
    $result = mysqli_query($conn, $sql);

    $info = array();
    
    if (mysqli_num_rows($result) > 0) 
        {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $info[] = $row;
            }
        }
        mysqli_close($conn);

        foreach($info as $key => $infotje)
                {
                    if(password_verify($Password_Login, $infotje["User_Password"]))
                    {
                        $_SESSION['User_Info'] = $infotje["User_Id"];
                        $_SESSION['User_Check'] = true;
                        sleep(1);
                        header("location: login_check.php");
                    }
                    else
                    {
                        $_SESSION['User_Check'] = false;
                        echo "Het wachtwoord of gebruiksnaam is niet goed ingevuld";
                        sleep(1);
                    }
                }

?>