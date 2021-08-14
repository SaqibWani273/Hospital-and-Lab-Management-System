<?php

include('../dbconnection.php');
session_start();
if(isset($_POST['loginsub'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from patienttable where email = '$email' and password = '$password'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    if(is_array($row)&&!empty($row)){
        $_SESSION['username']=$row['username'];
        $_SESSION['email']=$row['email'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['age']=$row['age'];
        $_SESSION['address']=$row['address'];
        $_SESSION['id']=$row['id'];
        header('location:Panel.php');
}
else{
echo ('<script>
alert("invalid username or password");
window.location.href="login.php";
</script>');
}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login </title>

</head>
<body>

    <h1>Login page</h1>
    <script>
    </script>
</body>
</html>