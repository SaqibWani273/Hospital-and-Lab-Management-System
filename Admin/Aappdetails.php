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
    <title>Admin Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="Apstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- ajax and datatable-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="http://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- -->
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#bookapp{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
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
    <?php include('Asidebar.php')?>
    <div id="content">

    <?php include('AheadNav.php')?><center>
    <div class ="table-responsive" style="padding:10px;">
    <table id="dtHorizontalExample" class="table table-striped table-bordered table-light table-sm" 
  >
    <thead style="text-align:center;"  >

    <tr >
                    <th class="th-sm">ID</th>
                    <th class="th-sm">Patient Name</th>
                    <th class="th-sm">Doctor</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Appointment Date</th>
                    <th class="th-sm">Appointment Time</th>
                    <th class="th-sm">Contact</th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Prescription Status</th>

                  </tr>
    </thead>
<tbody style="text-align:center;">
<?php
$sql="select * from appointmenttable";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){



?>


<tr>
<th><?php echo $row['id']  ?></th>
<td><?php echo $row['patient'] ?></td>
<td><?php echo $row['doctor'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['date'] ?></td>
<td><?php echo $row['time'] ?></td>
<td><?php echo $row['contact'] ?></td>
<td><?php

if($row['userstatus']==1&&$row['docstatus']==0)
echo "Cancelled By Doctor !";
else if($row['userstatus']==0&&$row['docstatus']==1)
echo "Cancelled By Patient !";
else
echo "Active";

?></td>


<td>
<pre>
<?php

if($row['prescribestatus']==1)
echo "Prescribed";
else
echo "Not Yet !";


?></pre>
</td>
</tr>
<?php }?>

</tbody>

</table>
    </div>
</center>
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