<?php

include('../dbconnection.php');
session_start();
$username=$_SESSION['username'];
if(isset($_POST['submitSearch'])){
    $test=$_POST['test'];
    
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Labs</title>
    
	<link rel="shortcut icon" type="/image/x-icon" href="../images/lablogo2.jpeg" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="labstyle.css?v=<?php echo time()?>">
<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- sweet alert-->
<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
           <!-- ajax and datatable-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="http://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</link>
</head>
<style>
    #testlist{
        background-color:slateblue;
        font-size:20px;
    }
    #testlistspan{
        color:white;
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
<body>
<?php  include('labheader.php');?>
    <div class="main-content">
    <div class="table-responsive">
    <table id="dtHorizontalExample" class="table table-striped table-bordered table-light table-sm" 
  width="100%">
    <thead style="text-align:center;">

    <tr>
                    <th class="th-sm">ID</th>
                    <th class="th-sm">Test Name</th>
                    <th class="th-sm">Department</th>
                    <th class="th-sm">Pre Test Requirement</th>
                    <th class="th-sm">Report Delivery Time</th>
                    <th class="th-sm">Sample Collection Time</th>            
                    <th class="th-sm">Price </th>
                    <th>Book Test</th>
                  </tr>
    </thead>
<tbody style="text-align:center;">
<?php
$sql="select * from testslist";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){



?>


<tr>
<th><?php echo $row['id']  ?></th>
<td><?php echo $row['Test'] ?></td>
<td><?php echo $row['Department'] ?></td>
<td><?php echo $row['info'] ?></td>
<td><?php echo $row['delivery'] ?></td>
<td><?php echo $row['time'] ?></td>
<td><?php echo $row['price'] ?></td>
<td><a href="booktest.php"><button class="btn btn-primary">Add Test</button></a></td>
</tr>
<?php }?>

</tbody>

</table>
   </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#navButton').on('click', function () {
                $('#mainNav').toggleClass('active');
            });
        });
    </script>
</html>