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
    <title>Patient Panel</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="panelstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#profile{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
}
</style>

</head>
<body>
    <div class="wrapper">
    <?php include('Psidebar.php')?>
    <div id="content">

    <?php include('PheadNav.php')?>
    <div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Edit Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Edit Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">
 </h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												
												<div class="panel-body">
									<h4><?php echo $_SESSION['username']; ?>'s Profile</h4>
								<form role="form" name="edit" method="post" action="patientreg.php">
													

<div class="form-group">
															<label for="usernamename">
																 User Name
															</label>
	<input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username'];?>">
														</div>

														<div class="form-group">
									<label for="fess">
																 User Contact
															</label>
					<input type="tel" name="phone" class="form-control"  value="<?php echo $_SESSION['phone'];?>"></div>
<div class="form-group">
															<label for="address">
																 Address
															</label>
					<textarea name="address" class="form-control" ><?php echo $_SESSION['address'];?></textarea>
														</div>
<div class="form-group">
															<label for="age">
																 Age
															</label>
		<input type="tel" name="age" class="form-control" required="required" value="<?php echo $_SESSION['age'];?>">
														</div>
	
<div class="form-group">
									<label for="gender">
																Gender
															</label>

<select name="gender" class="form-control" required="required">
	
<option value="male">Male</option>
<option value="female">female</option>	
<option value="female">Female</option>	
<option value="other">Other</option>	
</select>

														</div>

								
														<button type="submit" name="edituser" class="btn btn-o btn-primary" >
															Update
														</button>
														<br>
													</form>
													<hr style="border:1px solid black;">
													<form action="patientreg.php" method="post">
													<div class="form-group">
									<label for="fess">
																 User Email
															</label>
					<input type="email" name="email" id='email' class="form-control"  value="<?php echo $_SESSION['email'];?>"></div>	</div>

					<input type="submit" name="changeemail" value="Change Email" class='btn btn-info'>
																									</div>
											</div>

										</div>
											
											</div>
										</div>
									
									</div>
								</div>
								<br><br>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
    <!-- end profile-->
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