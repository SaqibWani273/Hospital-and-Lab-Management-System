<?php
session_start();
$username=$_SESSION['username'];
include('../dbconnection.php');




?><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Search Test </title>
    <!-- Bootstrap CSS -->
    
    <link rel="shortcut icon" type="image/x-icon"  href="../images/lablogo2.jpeg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#342ac1;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Test Name</th>
      <th>Department</th>
      <th>Pre Test Requirement</th>
      <th>Report Delivery Time</th>
      <th>Sample Collection Time</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody><?php
  if(isset($_POST['submitSearch'])){
    $test=$_POST['test'];
    $sql="select * from testslist where Test='$test'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

?>
 <tr>
<td><?php echo $row['Test']; ?></td>

<td><?php echo $row['Department']; ?></td>

<td><?php echo $row['info']; ?></td>

<td><?php echo $row['delivery']; ?></td>

<td><?php echo $row['time']; ?></td>
<td><?php echo $row['price']; ?></td>

 </tr><?php
 }
}?>
</tbody></table>
</div> 
<div><a href="bookTest.php" class="btn btn-light">Book Test Now</a> &nbsp |  &nbsp
<a href="testList.php" class="btn btn-primary">See Tests List</a></div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
</body></html>