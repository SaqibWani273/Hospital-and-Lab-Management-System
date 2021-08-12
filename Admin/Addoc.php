<?php

include('../dbconnection.php');
if(isset($_POST['deletedoc'])){
    $email=$_POST['email'];

    $sql="select *  from doctortable where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if(is_array($row)&&!empty($row)){
        $dlt="delete from doctortable where email='$email'";
        mysqli_query($con,$dlt);
        echo ("
        <script> 
        alert('Doctor Deleted Succesfully');
        window.location.href='adminPanel.php';
        </script>");
    }
    else{
        echo ("
        <script> 
        alert('Email Doesnot Exist,Try Again !');
        </script>");
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
        <style>
#deletedoc{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);

}
</style>
</head>
<body>
    <div class="wrapper">
    <?php include('Asidebar.php')?>
    <div id="content">

    <?php include('AheadNav.php')?>
   <div class="container-fluid" style="text-align:center;">
<form action="addoc.php" method="post">
<input type="email" name="email" placeholder="Enter Doctor Name *" Required class="form-control">
<input type="submit" name="deletedoc" value="Delete Doctor" class="form-control btn btn-primary">
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