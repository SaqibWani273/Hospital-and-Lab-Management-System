<?php
session_start();
include('../dbconnection.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="panelstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#apphistory{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
}
</style>
</head>
<body>
    <div class="wrapper">
    <?php include('Psidebar.php')?>
    <div id="content">

    <?php include('PheadNav.php')?>
    <div class="container-fluid">
      <div class="table responsive">
        
              <table class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
                <thead>
                  <tr>
                    
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultancy Fees</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Current Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                
                $patient=$_SESSION['username'];
 $sql="select * from appointmenttable where patient='$patient'";
 $result=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($result)){
   ?>
   <tr>
<td><?php echo ($row['doctor']);?></td>
<td><?php echo ($row['fees']);?></td>
<td><?php echo ($row['date']);?></td>
<td><?php echo ($row['time']);?></td>
<td><?php 
if($row['userstatus']==1 && $row['docstatus']==1)
echo " Active";
else if($row['userstatus']==1&& $row['docstatus']==0)
echo "Cancelled By Doctor !";
else 
echo "Cancelled by you !";



?></td>
<td>
<?php
if($row['userstatus']==1&&$row['docstatus']==1){
  
?>
													
    <a href="panel.php?id=<?php echo $row['id'] ?>&cancelUpdate=1" onClick="return confirm('Are you sure you want to cancel this appointment ?'); " >
        <button class="btn btn-danger">Cancel</button></a>
  <?php

}

else
{
  echo("Cancelled");
}

?>

</td>

   </tr>
   <?php }?>


                                  </tbody>
              </table>
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