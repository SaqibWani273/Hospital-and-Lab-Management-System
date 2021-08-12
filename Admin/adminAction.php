<?php
session_start();
include('../dbconnection.php');
if(isset($_POST['adminsub']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='projectAdmin'&& $password=='projectAdmin123')
    {
        $_SESSION['adminUser']=$username;
        header('location:adminPanel.php');
    }
    else
    {
        echo("<script>
           alert('invalid Admin Credentials, Try again !');
           window.location.href='../pindex.php';
        </script>");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Action</title>
</head>
<body>
    
</body>
</html>