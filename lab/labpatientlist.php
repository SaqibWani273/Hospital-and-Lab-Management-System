<?php


include('../dbconnection.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LabAdmin Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/lablogo2.jpeg" />
<link rel="stylesheet" type="text/css" href="../Admin/Apstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#plist{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
          <!-- ajax and datatable-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="http://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script>
$(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});
</script>
</head>
<body>
    <div class="wrapper">
    <nav id="sidebar">
            <div class="sidebar-header">
            <a class="nav-link js-scroll-trigger" href="adminPanel.php" style="font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="ti-support" aria-hidden="true"></i> Global Hospitals</h4></a>
            </div>

  <div>
      <a class="list-group-item list-group-item-action"  href="labAdminPanel.php" id="dashboard">
      <div class="item-media">
		  	<i class="ti-home"></i>
		</div>Dashboard</a> <!--dashboard-->

      
       <a class="list-group-item list-group-item-action" href="reportslist.php" id="prescriptions">
      <div class="item-media">
				<i class="ti-layout"></i>
			</div>Reports List</a>  <!-- prescription list-->
           
      <a class="list-group-item list-group-item-action " id="plist" href="Apatientlist.php" role="tab" aria-controls="home">
      <div class="item-media">
					<i class="ti-user"></i>
				</div>Patient List</a>    <!-- patient list-->
        
      <a class="list-group-item list-group-item-action " id="addTest" href="addTest.php" role="tab" aria-controls="home">
      <div class="item-media">
					<i class="ti-plus"></i> <i class="ti-layout"></i>
				</div>Add Test</a>    <!-- add doctor-->
        
    </div>
</nav>
    <div id="content">
<div id="adminheadnav">
<nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fas fa-align-left"></i> -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </button>
  <div id="top-center" class="container-fluid ">
      <p> LabAdmin | DashBoard</p>
  </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
     <li class="nav-item"> <a class="nav-link" href="../logout.php"><i class="ti-eraser" style="padding-right:10px;"></i>Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
</div>
<center>
<div class="container-fluid">
<div class="table-responsive">
   <table id="dtHorizontalExample" class="table table-striped table-bordered  table-sm" width="100%">
    <thead style="text-align:center;">

    <tr>
                    <th class="th-sm">ID</th>
                    <th class="th-sm">Patient Name</th>
                    <th class="th-sm">Contact</th>
                    <th class="th-sm">Gender</th>
                    <th class="th-sm">E-mail</th>

                  </tr>
    </thead>
<tbody style="text-align:center;">
<?php
$sql="select * from labpatienttable";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){



?>


<tr>
<th><?php echo $row['id']  ?></th>
<td><?php echo $row['username'] ?></td>
<td><?php echo $row['phone'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['email'] ?></td>



</tr>
<?php }?>

</tbody>

</table>

   </div>
</div>
</center>
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