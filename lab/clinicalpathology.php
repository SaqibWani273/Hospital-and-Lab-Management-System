<?php
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- sweet alert-->
<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
</link>
</head>
<style>
    #dept{
        background-color:slateblue;
        font-size:20px;
    }
    #deptspan{
        color:white;
    }
</style>
<body>
<?php  include('labheader.php');?>
    <div class="main-content">
    <div class="dept" style="padding:5%;">
   <div class="container">
<h1>Department-> <span><i><small>Clinical Pathology</small> <i></span></h1>
 <div class="container-fluid">
 <h2>Clinical Pathology</h2>
 <p class="text-justify">The Department of Clinical Pathology at Apollo Diagnostics supports the diagnosis of disease using laboratory testing of blood and other bodily fluids, tissues, and microscopic evaluation of individual cells.</p>

<p class="text-justify">
    
The department employs advanced computer technology and automated equipment. A wide range of point-of-care equipment is also available to get specimen testing straight to the intensive care units and the operating rooms.
</p>

<p class="text-justify">
The laboratory scientists and pathologists work in close association with the clinical biochemistry team and the division of Hematology to deliver high quality, timely and affordable services.
</p>
 </div>
   </div>
</div>
<div class="copy_right" style="background-color:black;color:White;text-align:center;padding-top:3%;padding-bottom:1%;">
		<div class="container">
			<div class="copyright">
				<p>Copyright © 2018 Ragavs Diagnostic <span class="line_height">|</span> <strong> <br class="visible-xs">Developed by : </strong><a href="http://jayblues.com/" target="_blank" class="jayblues">Jay<span class="blues">Blues</span> Technologies</a></p>				
			</div>
			
		</div>
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