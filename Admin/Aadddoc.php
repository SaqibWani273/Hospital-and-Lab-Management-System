<?php
include("../dbconnection.php");
if(isset($_POST['addDoc'])){
    $name=$_POST['doctor'];
    $email=$_POST['demail'];
    $address=$_POST['address'];
    $spec=$_POST['special'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
     $fees=$_POST['docFees'];

     $sql="select * from doctortable where email='$email'";
     $result=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result);
 
     if(is_array($row)&&!empty($row)){
     echo "<script>
     alert(' Email ->  $email  aready exists , Try Again!');
     window.location.href='Aadddoc.php';
     </script>";
     }
     else{
         $sql1="insert into doctortable(id,name,password,address,contact,special,email,fees)
     values('','$name','$password','$address','$contact','$spec','$email','$fees')";
     mysqli_query($con,$sql1) or die("error occured !".$con->error);
     $swal=1;
     echo("<Script>
    alert('Doctor Added Successfully !');
    window.location.href='adminPanel.php';
     </script>");
     //header('location:patientlogin.php');
     }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="Apstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <!-- sweet alert-->
<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
        <style>
#addDoc{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
<script >
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = 'darkgreen';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
function checklen(){
    var pass1 = document.getElementById("password"); 
        var cpass=document.getElementById("cpassword");
        if(pass1.value.length<6)
    {  
       // alert("Password must be at least 6 characters long. Try again!");  
      swal("ERROR!", "Password must be at least 6 characters long. Try again!", "error");
        return false; 

      } 

  if(pass1.value !==
    cpass.value){
        swal("ERROR!", "Passwords Donot Match. Try again!", "error");
        return false;  
    }
}
  </script>
</head>
<body>
    <div class="wrapper">
    <?php include('Asidebar.php')?>
    <div id="content">

    <?php include('AheadNav.php')?>
<div class="container-fluid">

<form class="form-group" method="post" action="Aadddoc.php">
    <h2>Add Doctor Details</h2>
          <div class="row">
                  <div class="col-md-4"><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" placeholder=" Doctor Name *"class="form-control" name="doctor" required></div><br><br>
                  <div class="col-md-4"><label>Specialization:</label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required>
                      <option value="head" name="spec" disabled selected="">Select Specialization *</option>
                      <option value="General" name="spec">General</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                      <option value="Dermatologist" name="spec">Dermatologist</option>
                      <option value="Dietitian" name="spec">Dietitian</option>
                      <option value="Nephrologist" name="spec">Nephrologist</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email" placeholder="Email *" class="form-control" name="demail" required=""></div><br><br>
                  <div class="col-md-4"><label>Clinical Address:</label></div>
                  <div class="col-md-8"><input type="text" placeholder="Address"class="form-control" name="address" ></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" placeholder="password *"class="form-control" onkeyup="check();" name="password" id="password" required=""></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8" id="cpass"><input type="password"
                  placeholder="confirm password *" class="form-control" onkeyup="check();" name="cpassword" id="cpassword" required="">&nbsp; &nbsp;<span id="message"></span> </div><br><br>
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="tel" maxlength="4" placeholder="fees *"class="form-control" name="docFees" required=""></div><br><br>
                  <div class="col-md-4"><label>Contact Number :</label></div>
                  <div class="col-md-8"><input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Contact no. *" ></div><br><br>
                  
                </div>
          <input type="submit" name="addDoc" value="Add Doctor" class="btn btn-primary" onclick="return checklen();" >
        </form>

</div>
    
   
    </div>
    </div>
      <!-- jQuery CDN - Slim version (=without AJAX) -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>