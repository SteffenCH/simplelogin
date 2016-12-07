<?php
if (isset($_POST['submit']))
{
    $user_nameormail = $_POST['user_nameoremail'];
    $password = $_POST['user_pass'];
    include 'config.php';
    $user_nameormail = mysqli_real_escape_string($db,$user_nameormail);
    $password = mysqli_real_escape_string($db,$password);
    if(strlen($user_nameormail) <= 6 || strlen($password) <= 6)
    {
        die("<script type='text/javascript'>alert('Det indtastede brugernavn eller password er kortere end 7 karaktere.'); window.location = \"../index.php\";</script>");
    }
    $mySqlQuery = "SELECT * FROM `users` WHERE `username` = '$user_nameormail' OR `email` = '$user_nameormail'";
    $result = mysqli_query($db,$mySqlQuery);
    $row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
    $passwordHash = $row['customer_company_pass'];
    if(password_verify($password, $passwordHash) && $user_nameormail = $row['username'] || $user_nameormail = $row['email'])
    {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Id'] = $row['Id'];
        $_SESSION['customerLoggedin'] = $row['username'];
        $_SESSION['isSetup'] = false;
        if($row['customer_company_phone'] == "")
        {
            die(header("Location: ../pagetogoto.php"));
        }
        $_SESSION['isSetup'] = true;
        echo ("Du er nu logget ind, der er endnu ikke en side her endnu men hvis du er kommet her til ved du det virker.");
    }
    else
    {
        die("<script type='text/javascript'>alert('Firmanavn / E-mail eller Password er forkert.'); window.location = \"../index.php\";</script>");
    }
}
