<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login&register";
$createdAccount = false;
$showErrorMessage = false;
session_start();

// Check if form is sended
if(isset($_POST['Make_Account_Button']))
{
    $numberOfEmptyFields = 0;

    // Checks if Firstname isn't empty and puts the output in an variable
    if(empty($_POST['Firstname_Userinput']))
    {   $numberOfEmptyFields++; }   else {    $Firstname_Userinput = $_POST['Firstname_Userinput'];  }

    // Checks if Lastname isn't empty and puts the output in an variable
    if(empty($_POST['Lastname_Userinput']))
    {    $numberOfEmptyFields++;}   else {      $Lastname_Userinput = $_POST['Lastname_Userinput']; }

    // Checks if Username isn't empty and puts the output in an variable
    if(empty($_POST['Username_Userinput']))
    {    $numberOfEmptyFields++;    }   else	{   $Username_Userinput = $_POST['Username_Userinput']; }

    // Checks if Password isn't empty and puts the output in an variable
    if(empty($_POST['Password_Userinput']))
    {    $numberOfEmptyFields++;    }   else	{   $Password_Userinput = $_POST['Password_Userinput'];     $encrypted_Password = password_hash($Password_Userinput, PASSWORD_DEFAULT); }

    // Checks if E_mailAdress isn't empty and puts the output in an variable
    if(empty($_POST['E_mail_Userinput']))
    {    $numberOfEmptyFields++;    }   else	{   $E_mail_Userinput = $_POST['E_mail_Userinput']; }


    if(empty($_POST['TelephoneNumber_Userinput']))
    {   $numberOfEmptyFields++;      }  else	{   $Telephonenumber_Extrauserinput = $_POST['TelephoneNumber_Userinput'];}

    if(empty($_POST['Adress_Userinput']))
    {   $numberOfEmptyFields++; }       else { $Adress_Extrauserinput = $_POST['Adress_Userinput']; }
    
    if(empty($_POST['City_Userinput']))
    {   $numberOfEmptyFields++; }       else {  $City_Extrauserinput = $_POST['City_Userinput'];    }
    
    if(empty($_POST['Country_Userinput']))
    {   $numberOfEmptyFields++; }       else {  $Country_Extrauserinput = $_POST['Country_Userinput'];  }
    
    if(empty($_POST['DateBirth_Userinput']))
    {   $numberOfEmptyFields++; }       else {    $DateBirth_Extrauserinput = $_POST['DateBirth_Userinput'];  }


    // Checks if there are no empty fields otherwise it will show an custom error message
    if($numberOfEmptyFields == 0)
    {
        include 'Elementen/database_sign_up.php';
    }
    else
    {
        $showErrorMessage = true;
    }
}
?>

<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediaSocial - Sign up</title>
    <link rel="stylesheet" type="text/css" href="CSS/Stijl.css" />
</head>
<body>
    <div id="Sign_Up_Div">
        
        <img id="Image_Logo_SignUpPage"src="Afbeeldingen/MediaSocial_Logo.png"> 
        <h6 id="Disclaimer_SignUp">Met het aanmaken van een account <br/> ga je akkoord met de <a href="https://nl-nl.facebook.com/legal/terms">algemene voorwaarden</a> van MediaSocial®</h6>
        
        <form action="sign_up.php" method="POST"> <br/>
            <!--Basic Inputs for form-->
            <input class="Sign_Up_Input" type="text" placeholder="Voornaam" name="Firstname_Userinput">
            <input class="Sign_Up_Input" type="text" placeholder="Achternaam (Ook Tussenvoegels)" name="Lastname_Userinput">
            <input class="Sign_Up_Input" type="text" placeholder="Gebruikersnaam" name="Username_Userinput">
            <input class="Sign_Up_Input" type="password" placeholder="Wachtwoord" name="Password_Userinput">
            <input class="Sign_Up_Input" type="e-mail" placeholder="E-mailadress (a@a.com)" name="E_mail_Userinput">

            <!--Extra Inputs for form-->
            <input class="Sign_Up_Input" type="tel"  placeholder="Telefoon-Nummer (12-12345678)" name="TelephoneNumber_Userinput" pattern="[0-9]{2}-[0-9]{8}">
            <input class="Sign_Up_Input" type="text" placeholder="Straat + Huisnummer" name="Adress_Userinput">
            <input class="Sign_Up_Input" type="text" placeholder="Stad/Dorp" name="City_Userinput">
            <input class="Sign_Up_Input" type="password" placeholder="Land" name="Country_Userinput">
            <input class="Sign_Up_Input" type="date" placeholder="Geboorte-Datum" name="DateBirth_Userinput">

            <br/> <br/> Alle velden moet je invullen. <br/>

            <!--Submit Button-->
            <button id="Login_Button" type="Submit" name="Make_Account_Button">Maak een account aan</button>

        </form>

        <?php

            // If a account has been created then we say in the session that a account is created and sends you to a inlog page
            if($createdAccount == true)
            {
                $_SESSION['ShowSignUpMessage'] = true;
                sleep(1);
                header("location: index.php");
            }
            else if ($showErrorMessage == true)
            {
                echo "<script>alert('Je bent: ". $numberOfEmptyFields ." verplicht(en) velden vergeten in te vullen. Je moet ze allemaal invullen om verder te kunnen gaan.')</script>";
            }
        ?>

    </div>
</body>
</html>
