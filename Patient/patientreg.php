<?php
include('../dbconnection.php');
session_start();
if(isset($_POST['patreg'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['contact'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $username=$fname.' '.$lname;
    $sql="select * from patienttable where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    if(is_array($row)&&!empty($row)){
    echo "<script>
    alert(' Email ->  $email  aready exists , Try Again!');
    window.location.href='../pindex.php';
    </script>";
    }
    else{
        $sql1="insert into patienttable(id,username,email,phone,password,gender,age,address)
    values('','$username','$email','$phone','$password','$gender','$age','$address')";
    mysqli_query($con,$sql1) or die("error occured !".$con->error);
    $_SESSION['username']=$username;
    $_SESSION['gender']=$gender;
    $_SESSION['phone']=$phone;
    $_SESSION['email']=$email;
    $_SESSION['age']=$age;
    $_SESSION['address']=$address;
    echo("<Script>
   alert('Registration Successfull !');
    window.location.href='login.php';
    </script>");
    //header('location:patientlogin.php');
    }

}

if(isset($_POST['edituser'])){
    $id=$_SESSION['id'];
    $username=$_POST['username'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    
        $sql="select * from patienttable where id='$id'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $sql1="update patienttable set username='$username',age='$age',address='$address',phone='$phone',gender='$gender' where id = '$id'";
        $query=mysqli_query($con,$sql1) or die("error occured !".$con->error);
        if($query)
        {
            
            $sql2="select * from patienttable where id='$id'";
            $result1=mysqli_query($con,$sql2);
            $row1=mysqli_fetch_assoc($result1);

            
        $_SESSION['username']=$row1['username'];
        $_SESSION['gender']=$row1['gender'];
        $_SESSION['phone']=$row1['phone'];
        $_SESSION['age']=$row1['age'];
        $_SESSION['address']=$row1['address'];
    //    $_SESSION['id']=$row1['id'];
          echo("
          <script>
          alert('Profile Updated Successfully!'); 
          window.location.href='panel.php';
          </script>
          ");
        }
        //header("location:Dapps.php");
        
        }


        if($_SESSION['email']==$_POST['email']){
            echo "<script>
                    alert(' Email matches the previous one , Try Again!');
                    window.location.href='pmyprofile.php';
                    </script>";
        }
        else if(isset($_POST['changeemail'])){
            $id=$_SESSION['id'];
            $email=$_POST['email'];
            $sql0="select * from patienttable where email='$email'";
            $result0=mysqli_query($con,$sql0);
            $row0=mysqli_fetch_array($result0);
        
            if(is_array($row0)&&!empty($row0)){
            echo "<script>
            alert(' Email ->  $email  aready exists , Try Again!');
            window.location.href='pmyprofile.php';
            </script>";
        }
        else{

            $updateemail="update patienttable set email='$email'where id='$id'";
        $updatequery=mysqli_query($con,$updateemail) or die("error occured !".$con->error);
        if($updatequery){
            $_SESSION['email']=$email;
            echo "<script>
            alert(' Email Updated Syuccessfully');
            window.location.href='panel.php';
            </script>";
        }

        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
</head>
<body>

<script>
//swal("Oops!", "Something went wrong, you should choose again!", "error");  
//swal("Good job!", "You clicked the button!", "success"); 
</script>
</body>
</html>