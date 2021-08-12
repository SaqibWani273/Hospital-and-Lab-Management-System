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
    <article class="article-page">
    

        
        <div class="image-gallery-container">
	<div class="container">
		<h1>Departments</h1>
		<div class="row">
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="biochemistry.php"><img src="https://www.apollodiagnostics.in/image/d1.png" class="img-fluid"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="clinicalpathology.php"><img src="https://www.apollodiagnostics.in/image/d2.png" class="img-fluid"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="hematology.php"><img src="https://www.apollodiagnostics.in/image/d4.png" class="img-fluid" alt="image-1"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="immunology.php"><img src="https://www.apollodiagnostics.in/image/d5.png" class="img-fluid"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="microbiology.php"><img src="https://www.apollodiagnostics.in/image/d6.png" class="img-fluid"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="molecularbiology.php"><img src="https://www.apollodiagnostics.in/image/d7.png" class="img-fluid" alt="image-1"></a>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a href="serology.php"><img src="https://www.apollodiagnostics.in/image/d9.png" class="img-fluid"></a>
			</div>
		</div>
	</div>
</div>
        
    </article>
</div>
<?php include('footer.php');?>
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