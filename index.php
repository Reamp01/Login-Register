<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login&register";
session_start();
$_SESSION['User_Check'] = false;

if(isset($_POST['Submit_Login']))
{
    $Username_Login = $_POST['Username_Login'];
    $Password_Login = $_POST['Password_Login'];

    include 'Elementen/database_index.php';
}   
?>

<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediaSocial - Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/Stijl.css" />
</head>
<body>
    <div id="Login_Div">
        <img id="Image_Logo"src="Afbeeldingen/MediaSocial_Logo.png"> <br/>
        <form action="index.php" method="POST">
            <input id="Username_Input" type="text" placeholder="Gebruikersnaam" name="Username_Login"> <br/>
            <input id="Password_Input" type="password" placeholder="Wachtwoord" name="Password_Login"> <br/>
            <button id="Login_Button" type="submit" name="Submit_Login">Aanmelden</button>
        </form>
    </div>
    <div id="Sign_In_Div">
        <a id="Text_2_Signup" href="sign_up.php">Klik hier </a> &nbsp;om een account aan te maken
    </div>
    <?php
        if(isset($_SESSION['ShowSignUpMessage']))
        {
            unset($_SESSION['ShowSignUpMessage']);
            echo "<script> alert('Je account is aangemaakt.');</script>";
        }
    ?>
</body>
</html>