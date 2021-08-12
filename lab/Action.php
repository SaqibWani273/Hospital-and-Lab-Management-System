<?php
include('../dbconnection.php');
session_start();
if(isset($_POST['labpatsub'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['contact'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $username=$fname.' '.$lname;
    $sql="select * from labpatienttable where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    if(is_array($row)&&!empty($row)){
    echo "<script>
    alert(' Email ->  $email  aready exists , Try Again!');
    window.location.href='pindex.php';
    </script>";
    }
    else{
        $sql1="insert into labpatienttable(id,username,email,phone,password,gender)
    values('','$username','$email','$phone','$password','$gender')";
    mysqli_query($con,$sql1) or die("error occured !".$con->error);
    $swal=1;
    echo("<Script>
   alert('Registration Successfull !');
    window.location.href='labpatientlogin.php';
    </script>");
    //header('location:patientlogin.php');
    }

}
if(isset($_POST['labloginsub'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from labpatienttable where email = '$email' and password = '$password'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    if(is_array($row)&&!empty($row)){
        $_SESSION['username']=$row['username'];
        $_SESSION['email']=$row['email'];
        $_SESSION['gender']=$row['gender'];
        header('location:dashboard.php');
}
else{
echo ('<script>
alert("invalid username or password");
window.location.href="labpatientlogin.php";
</script>');
}
}
if(isset($_POST['labAdminsub'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='labAdmin'&&$password=='labAdmin123'){
        header('location:labAdminPanel.php');
    }
    else
    {
        echo("<script>
        alert('invalid lab Admin Credentials,Try Again!');
        window.location.href='pindex.php';
        </script>");
    }
}
if(isset($_POST['addTest'])){
    
    $testName=$_POST['test'];
    $dept=$_POST['department'];
    $info=$_POST['info'];
    $delivery=$_POST['delivery'];
    $time=$_POST['time'];
    $price=$_POST['price'];
    $Tsql="select * from testslist where Test='$testName' and Department='$dept'";
    $Tresult=mysqli_query($con,$Tsql);
    $Trow=mysqli_fetch_array($Tresult);

    if(is_array($Trow)&&!empty($Trow)){
    echo "<script>
    alert(' $testName  in $dept department aready exists , Try other One!');
    window.location.href='labAdminPanel.php';
    </script>";
}
else{
    $Tsql1="insert into testslist(id,Test,Department,info,delivery,time,price)
    values('','$testName','$dept','$info','$delivery','$time','$price')";
    mysqli_query($con,$Tsql1) or die("error occured !".$con->error);
   
    echo("<Script>
   alert('Test Added Successfully !');
    window.location.href='labAdminPanel.php';
    </script>");
}



}
if(isset($_POST['bookTest'])){
    $username=$_SESSION['username'];
    $patient=$_POST['name'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $test=$_POST['test'];
    $price=$_POST['fees'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    $que="insert into bookedtests(id,username,patientname,test,mobile,city,address,date,age,gender)values('','$username','$patient','$test','$mobile','$city','$address','$date','$age','$gender')";

mysqli_query($con,$que) or die("error occured !".$con->error);
echo("<Script>
   alert('Test Booked Successfully !');
    window.location.href='dashboard.php';
    </script>");
}

if(isset($_POST['generate_report'])){
    function generate_bill(mysqli $con){
        $id = $_POST['id'];
        $output='';
        $sql="select * from bookedtests where id='$id'";
        $query=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($query)){
          $output .= '<br/>
          <label> Appointment ID : </label>'.$row["id"].'<br/><br/>
          <label> Patient Name : </label>'.$row["patientname"].'<br/><br/>
          <label> Test Name : </label>'.$row["test"].'<br/><br/>
          <label> Appointment Date : </label>'.$row["date"].'<br/><br/>
          <label> Gender : </label>'.$row["gender"].'<br/><br/>
          <label> Age : </label>'.$row["age"].'<br/><br/>
          <label> Report Details : </label>'.$row["ReportDetails"].'<br/><br/>
  
          
          ';
          echo $output;
      
        }
        
        return $output;
      }
require_once("../TCPDF/tcpdf.php");
$obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
$obj_pdf -> SetCreator(PDF_CREATOR);
$obj_pdf -> SetTitle("Generate Bill");
$obj_pdf -> SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
$obj_pdf -> SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$obj_pdf -> SetFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$obj_pdf -> SetDefaultMonospacedFont('helvetica');
$obj_pdf -> SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf -> SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
$obj_pdf -> SetPrintHeader(false);
$obj_pdf -> SetPrintFooter(false);
$obj_pdf -> SetAutoPageBreak(TRUE, 10);
$obj_pdf -> SetFont('helvetica','',12);
$obj_pdf -> AddPage();

$content = '';

$content .= '
    <br/>
    <h2 align ="center"> Global Hospitals</h2><br/>
    <h3 align ="center"> Test Report</h3><br/><br/>
    

';

$content .= generate_bill($con);
$obj_pdf -> writeHTML($content);
ob_end_clean();
$obj_pdf -> Output("bill.pdf",'I');
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