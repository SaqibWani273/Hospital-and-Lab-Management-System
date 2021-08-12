<?php
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>
    <header class="page-header">
<div class="panel-wrapper">
<div class="panel-header">
<div class="row">
<div class="logo col-md-2" style="text-align:center;"> <a href="labmaking.php">
 <img src="../images/lablogo2.jpeg" alt="Global Hospital's Lab" style="border-radius:25px; height:85px;width:125px;">
 <h4 style="color:white;">Global  Diagonosis</h4>
  </a> </div>
<div class="search-bar col-md-6">
  <h3 class="text-center" style="color:white;">Search Here For a Medical Test</h3>
<div class=" border border-success ">
<form action="" method="post">
<div class="input-group ">
  <input type="text" class="form-control" placeholder="Search For a Test..." name="test">
  <div class="input-group-append"><button type="submit" class="btn btn-info"
   name="submitSearch" style="border-radius:15px;">
    <span class="input-group-text "><i class="fa fa-search "></i></span>
    </button>
  </div>
 
  </div>
  </form>
</div>
</div>
<div class="col-md-2"  style="text-align:center;">
<a href="#"><img src="../images/ourservices.jpeg" alt="lab About us" style="border-radius:25px; height:55px;width:55px;">
<h4 style="color:white;">
Our Services </h4>
</a>
</div>
<div class="col-md-2 " style="text-align:center;">

<a href="#"><img src="../images/contactus.jpeg" alt="lab Contact us" style="border-radius:25px; height:55px;width:55px;"><h4 style="color:white;">
About Us </h4></a>

</div>
</div>
</div>

</div>

    </header>
    <div style="text-align:center;" >

<nav class="navbar navbar-expand-lg navbar-dark "  id="mainNav" style="background-color:rgb(0,158,158);">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon" id="navButton"></span>
</button>

<div class="collapse navbar-collapse " id="navbarNav">
<ul class="navbar-nav  justify-content-center">
<li class="nav-item active ">
<a class="nav-link" href="#">DASHBOARD </a>
</li>
<li class="nav-item ">
<a class="nav-link" href="#">BOOK TEST</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="#">DEPARTMENTS</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="#">TESTs LIST</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="#">REPORTS</a>
</li>

</ul>
</div>
</nav>


</div>
    <div class="nav-sections">
    <div class="container-fluid" >
<div id="Carousel" class="carousel slide" data-ride="carousel" style="width:100%;height:400px;">
<ol class="carousel-indicators">
<li data-target="#Carousel" data-slide-to="0" class="active"></li>
<li data-target="#Carousel" data-slide-to="1"></li>
<li data-target="#Carousel" data-slide-to="2"></li>
<li data-target="#Carousel" data-slide-to="3"></li>
<li data-target="#Carousel" data-slide-to="4"></li>
</ol>
<div class="carousel-inner" style="width:100%;height:400px;">
<div class="item active" style="width:100%;height:400px;">
<img src="../images/hddashboard2.jpeg" alt="Los Angeles" style="width:100%;height:400px;">
<div class="carousel-caption">
<h3> Global Diagonosis </h3>
<p> Book a Test Now ! </p>
</div>
</div>
<div class="item">
<img src="../images/hddashboard.jpeg" alt="Chicago" style="width:100%;height:400px;">
<div class="carousel-caption" >
<h3> Global Diagonosis </h3>
<p> Test 1</p>
</div>
</div>
<div class="item">
<img src= "../images/hddashboard3.jpeg" alt="New York"  style="width:100%;height:400px">
<div class="carousel-caption">
<h3>Global Diagonosis</h3>
<p>Test 2</p>
</div>
</div>
<div class="item">
<img src= "../images/hddashboard1.jpeg" alt="New York"  style="width:100%;height:400px">
<div class="carousel-caption">
<h3>Global Diagonosis</h3>
<p>Test 2</p>
</div>
</div>
<div class="item">
<img src= "../images/hddashboard4.jpeg" alt="New York"  style="width:100%;height:400px">
<div class="carousel-caption">
<h3>Global Diagonosis</h3>
<p>Test 2</p>
</div>
</div>
</div>
<a class="left carousel-control" href="#Carousel" data-slide="prev">
<span class= "glyphicon glyphicon-chevron-left"></span>
<span class= "sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#Carousel" data-slide="next">
<span class="sr-only">Next</span>
</a>
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