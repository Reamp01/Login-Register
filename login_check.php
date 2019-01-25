<?php

$ShowText = false;
session_start();

if(isset($_SESSION['ShowSignUpMessage']))
        {
            unset($_SESSION['ShowSignUpMessage']);
        }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login&register"; 

    include 'Elementen/database_login_check.php';
?>

<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediaSocial - Logged in</title>
    <link rel="stylesheet" type="text/css" href="CSS/Stijl.css" />
</head>
<body>
    <div id="Sidebar_Homepage">
        <img id="MediaSocial_Picture" src="Afbeeldingen/MediaSocial_Logo.png" />
        <img id="Profile_Picture" src="Afbeeldingen/Deafult_Profile_Picture.png" />
        <h2>
            <?php if($ShowText == true ){ echo $User_FirstName . " " . $User_LastName; } ?>
        </h2>
        
        <div id="Logout_Button_Homepage">
            <a href="index.php">Uitloggen</a>
        </div>
    </div>
    <div id="Welcome_Message">
        <?php if($ShowText == true ){ echo "Hallo " . $User_FirstName . " je bent succesvol ingelogd."; } ?>
    </div>
</body>
</html>


