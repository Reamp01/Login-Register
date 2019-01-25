<?php
    // Create database connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check database connection
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Create SQL Statement
    $sql = 'SELECT * FROM `info` where User_Id='. $_SESSION['User_Info'] .' ';
    // Gets result of SQL Statement and puts it in an array
    $result = mysqli_query($conn, $sql);
    $info = array();
    if (mysqli_num_rows($result) > 0) 
        {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $info[] = $row;
            }
        }
        // Close database connection
        mysqli_close($conn);

        // This gets the Firstname of the user
        foreach($info as $key => $infotje)
        {
            $User_FirstName = $infotje['User_FirstName']; 
            $User_LastName = $infotje['User_LastName'];
            $User_UserName = $infotje['User_UserName'];
            if($_SESSION['User_Info'] == $infotje["User_Id"] && $_SESSION['User_Check'] == true)
            {
                $ShowText = true;
            }
        }
?>