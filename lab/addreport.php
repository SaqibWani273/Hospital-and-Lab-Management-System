<?php
session_start();
include('../dbconnection.php');

if(isset($_GET['patient'])){
$patient=$_GET['patient'];
$username=$_GET['username'];
$id=$_GET['id'];
$status=$_GET['pstatus'];
}
if(isset($_POST['prescribebtn'])){
$id=$_GET['id'];
$status=$_GET['pstatus'];
$report=$_POST['report'];
$prescribeQuery="UPDATE bookedtests
SET ReportDetails = '$report' WHERE id = '$id'";
mysqli_query($con,$prescribeQuery) or die("error occured !".$con->error);
if($status==0)
{
    $sql="UPDATE bookedtests
    SET reportstatus = '1' WHERE id = '$id'";
    
mysqli_query($con,$sql) or die("error occured !".$con->error);
}
//$_GET['pstatus']=1;
echo"<script>

window.location.href='labAdminPanel.php';
alert('Patient Prescribed Successfully  !');
</script>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescribe Patient</title>

    
    <link rel="shortcut icon" type="image/x-icon"  href="../images/title.ico" />
   
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}
#prescribe{
   
    width: 100%;
    align-items: stretch;
}


.navbar{
    
    padding: 15px;
    background-color:lightgrey;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);

}

h5{
    margin-right:25%;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color:slateblue;
}
#main-div{
  
  display: flex;
  justify-content: center;

}
.btn-success{
    
  
 margin-left:60%;
 margin-bottom: 10%;


}
.row{
    margin-bottom: 5%;
}
@media (max-width: 768px) {
    #small{
        width:min-content;
    }
    #large{
        width:min-content;
    }
    .btn-success{
    
  
    margin-left:auto;
    margin-bottom: 10%;
   
   
   }
}
@media (max-width: 590px) {
    #small{
        width:100%;
    }
    #large{
        width:100%;
    }
}
</style>
</head>
<body>
    <div class="wrapper" id="prescribe">
    
  <div >
 <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">

                <a class="nav-link js-scroll-trigger" href="doctorpanel.php" style="font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="ti-support" aria-hidden="true"></i> Global Diagonosis</h4></a>
                <h5>&nbsp;&nbsp;&nbsp; <i class="ti-pulse"></i> Patient <br><?php echo $patient?></h5>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </button>
        
</div>
 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="#"><i class="ti-user " style="padding-right:10px;"></i><?php echo $username; ?></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../logout.php"><i class="ti-eraser" style="padding-right:10px;"></i>
                                  Logout</a>
                            </li>
                        
                        </ul>
         
                    </div>
                    
                </div>
            </nav>
            <div class="container" id="main-div">
                
                 <!--   <form class="form-group" name="prescribeform" method="post" action="prescribe.php">
                    
                      <div class="row ">
                              <div class="col-md-2"><label>Disease:</label></div>
                              <div class="col-md-6">
                              <textarea id="disease" cols="86" rows="5" name="disease" required=""></textarea>
                              </div><br><br><br>
                              
                              <div class="col-md-2"><label>Allergies:</label></div>
                              <div class="col-md-6">
                              <textarea id="allergy" cols="86" rows="5" name="allergy" required=""></textarea>
                              </div><br><br><br>
                              <div class="col-md-2"><label>Prescription:</label></div>
                              <div class="col-md-6">
                              <textarea id="prescription" cols="86" rows="10" name="prescription" required=""></textarea>
                              </div><br><br><br>
                              <input type="hidden" name="fname" value="Ram">
                              <input type="hidden" name="lname" value="Kumar">
                              <input type="hidden" name="appdate" value="2021-06-08">
                              <input type="hidden" name="apptime" value="08:00:00">
                              <input type="hidden" name="pid" value="1">
                              <input type="hidden" name="ID" value="14">
                              <br><br><br><br>
                      <input type="submit" name="prescribe" value="Prescribe" class="btn btn-primary" >
                      
                    
                    <br>
                    
                  </div></form>-->


<form action="addreport.php?id=<?php echo $_GET['id']?>&pstatus=<?php echo $_GET['pstatus'];?>" method="post">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4" style="padding-top:50px;">
Report Result :
</div>
<div class="col-md-8">
<textarea name="report" id="small" cols="60" rows="5" required></textarea>
</div>
</div>
</div>


    
    <input type="submit" name="prescribebtn" value="Add Report" class="btn btn-success">

</form>

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










