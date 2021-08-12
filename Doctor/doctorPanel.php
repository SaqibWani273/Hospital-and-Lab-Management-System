<?php
include('../dbconnection.php');
session_start();
if(isset($_POST['docsub1'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="select * from doctortable where email = '$email' and password = '$password'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($result);
  if(is_array($row)&&!empty($row)){
      $_SESSION['username']=$row['name'];
      $_SESSION['email']=$row['email'];
      header('location:doctorPanel.php');
}
else{
echo ('<script>
alert("invalid username or password");
window.location.href="../pindex.php";
</script>');
}
}
if(isset($_GET['cancelUpdate'])){

$id=$_GET['id'];
$sql="select * from appointmenttable where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$sql1="update appointmenttable set docstatus=0 where id = '$id'";
$query=mysqli_query($con,$sql1);
if($query)
{
  $_GET['cancelUpdate']=0;
  echo("
  <script>
  alert('Appointment Cancelled Successfully!'); 
  </script>
  ");
}
//header("location:Dapps.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="Dpstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#dashboard{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
</head>
<body>
    <div class="wrapper">
    <?php include('Dsidebar.php')?>
    <div id="content">

    <?php include('DheadNav.php')?>
    <div class="container-fluid">
              <div class="row" id="drow">

               <div class="col-sm-4" >
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                        <a href="Dapps.php" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list fa-stack-1x fa-inverse"></i> </span>
                        </a>
                      <h4 class="StepTitle" style="margin-top: 5%;"> View Appointments</h4>                      
                      <p class="links cl-effect-1">
                        <a href="Dapps.php" >
                          Appointment List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" >
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                        <a href="Dpresc.php">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                        </a>
                      <h4 class="StepTitle" style="margin-top: 5%;"> Prescriptions</h4>
                        
                      <p class="links cl-effect-1">
                        <a href="Dpresc.php">
                          Prescription List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>    

             </div>
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