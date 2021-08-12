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
    <title>Prescriptions</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="Dpstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#prescriptions{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
</head>
<body>
    <div class="wrapper">
    <?php include('Dsidebar.php')?>
    <div id="content">

    <?php include('DheadNav.php')?>
    
<div class="table-responsive">

<!--Table-->
<table class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">

  <!--Table head-->
  <thead>
    <tr>
      <th class="th-sm">ID</th>
      <th class="th-sm">Patient Name</th>
      <th class="th-sm">Appointment Time</th>
      <th class="th-sm">Appointment Date</th>
      <th class="th-sm"> Patient Contact</th>
      <th class="th-sm">Disease</th>
      <th class="th-sm">Allergy</th>
      <th class="th-sm">Prescription</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
  <?php
                
                $doctor=$_SESSION['username'];
$sql="select * from prescriptiontable where doctor='$doctor'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
  
                      ?>
    <tr>
      <th scope="row"><?php echo ($row['id']);?></th>
       <td><?php echo ($row['patient']);?></td>
      <td><?php echo ($row['time']);?></td> 
      <td><?php echo ($row['date']);?></td>
      <td><?php echo ($row['contact']);?></td>
       <td><?php echo ($row['disease']);?></td>
       <td> <?php echo ($row['allergy']);?></td>
       <td><pre> <?php echo ($row['prescription']);?></pre></td>
    </tr>
    
    
    <?php
  }?>
   
  </tbody>
  <!--Table body-->

</table>
<!--Table-->

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