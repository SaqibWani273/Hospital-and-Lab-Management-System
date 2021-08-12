    <header class="page1-header" >
<div class="panel-wrapper1">
<div class="panel-header1">
<div class="row">
<div class="logo col-md-1" style="text-align:center;"> <a href="dashboard.php">
 <img src="../images/lablogo2.jpeg" alt="Global Hospital's Lab" style="border-radius:25px; height:85px;width:125px;">
 <h4 style="color:white;">Global  Diagonosis</h4>
  </a> </div>
  <div class="col-md-1" style="text-align:center;padding-top:33px;">

<a href="#"><i class="ti-info" style="background-color:black;border-radius:12px;"></i><h4 style="color:white;padding-top:20px;">
About</h4></a>
</div>
<div class="search-bar col-md-5">
  <h3  style="color:white;text-align:center;">Search Here For a Medical Test</h3>
<div >
<form action="testsearch.php" method="post">
<div class="input-group ">
  <input type="text" class="form-control" placeholder="Search For a Test... e.g. lipid_profile,Ammonia ,....." name="test" style="border-radius:5px;">
  <div class="input-group-append"><button type="submit" class="btn btn-info"
   name="submitSearch" style="border-radius:15px; margin-left:5px;">
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

<div class="col-md-2" style="text-align:center;">
<h3> <i class="ti-user"></i>  &nbsp&nbsp<?php echo "$username";?></h3>
<a href="../logout.php" >
<i class="ti-power-off" style="background-color:black;border-radius:12px;"></i>
<h5 style="color:white;"> LogOut </h5></a>

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
<li class="nav-item  " id="dashboard" >
<a class="nav-link" href="dashboard.php"><span  id="dashboardspan"  >DASHBOARD </span></a>
</li>
<li class="nav-item " id="booktest">
<a class="nav-link" href="booktest.php"><span  id="booktestspan">BOOK TEST</span></a>
</li>
<li class="nav-item " id="dept">
<a class="nav-link" href="dept.php"><span  id="deptspan">DEPARTMENTS</span></a>
</li>
<li class="nav-item " id="testlist">
<a class="nav-link" href="testlist.php"><span id="testlistspan">TESTs LIST</span></a>
</li>
<li class="nav-item " id="reports">
<a class="nav-link" href="reports.php"><span  id="reportsspan">REPORTS</span></a>
</li>

</ul>
</div>
</nav>


</div>
    