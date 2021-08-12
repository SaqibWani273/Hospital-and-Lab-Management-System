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
<!-- sweet alert-->
<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
</link><!-- image sliders -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
    #dashboard{
        background-color:slateblue;
        font-size:20px;

    }
    #dashboardspan{
        color:white;
    }
</style>
<body>
<?php  include('labheader.php');?>
    <div class="main-content">
      <div class="container-fluid" >
<div id="Carousel" class="carousel slide" data-ride="carousel" style="width:100%;height:400px;">
<ol class="carousel-indicators" >
<li data-target="#Carousel" data-slide-to="0" class="active"></li>
<li data-target="#Carousel" data-slide-to="1"></li>
<li data-target="#Carousel" data-slide-to="2"></li>
<li data-target="#Carousel" data-slide-to="3"></li>
<li data-target="#Carousel" data-slide-to="4"></li>
</ol>
<div class="carousel-inner" style="width:100%;height:400px;">
<div class="item active" style="width:100%;height:400px;"><a href="#">
<img src="../images/hddashboard2.jpeg" alt="Los Angeles" style="width:100%;height:400px;"></a>
<div class="carousel-caption">
<h3> Global Diagonosis </h3><a href="bookTest.php">
<p> <button class="btn btn-primary">Book a Test Now !</button> </p>
</a>
</div>
</div>
<div class="item"><a href="#">
<img src="../images/hddashboard.jpeg" alt="Chicago" style="width:100%;height:400px;">
<div class="carousel-caption" ></a>
<h3> Global Diagonosis </h3><a href="#"><button class="btn btn-primary">
<p> Test 1</p>
</button></a>
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
<div class="container-fluid sec-pad service-sec" id="services">

        <div class="container">

            <div class="text-center">

                <h1 class="sec-title">

                    Wide range of Laboratory Tests

                    <hr class="hr-heading">

                </h1>

                <p>Global Diagnosis is a medical diagnostic laboratory that offers a full range of laboratory services to help

                    diagnose, treat and monitor their patients' health. From collecting blood samples to developing new

                    treatments for patient care, we play an important role in the delivery of healthcare and improving

                    methods of disease detection.</p>

            </div>

            
            <div class="services">

                <div class="row m-0" id="test_cat">

                    
                        <div class="col-6 col-md-4">


                                <div class="service-box">

                                
                                    <img data-src="https://trulabs.in//uploads/category_icons/d8f53f62b126949a8e069dabdbec5225.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/d8f53f62b126949a8e069dabdbec5225.png">

                                    <h5>

                                        Hormones
                                    </h5>

                                    <p>

                                        Hormones tests.
                                    </p>

                                </div>

                            

                        </div>

                    
                        <div class="col-6 col-md-4">

                           

                                <div class="service-box">

                                    <img data-src="https://trulabs.in//uploads/category_icons/63b2975dbba22d8ac5f17f1b9d0ba0b2.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/63b2975dbba22d8ac5f17f1b9d0ba0b2.png">

                                    <h5>

                                        Biochemistry
                                    </h5>

                                    <p>

                                        An extensive range of testing services including 30 different tests using only a single tube of blood which's conducted by trained professionals.
                                    </p>

                                </div>

                            

                        </div>

                    
                        <div class="col-6 col-md-4">

                           

                                <div class="service-box">
                              
                                    <img data-src="https://trulabs.in//uploads/category_icons/f15b6356b24005cd95137761506f6fc3.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/f15b6356b24005cd95137761506f6fc3.png">

                                    <h5>

                                        Haematology
                                    </h5>

                                    <p>

                                        Routine hematology testing which includes tests on the blood, blood proteins and blood-producing organs to confirm medical diagnosis. 
                                    </p>

                                </div>

                        

                        </div>

                    
                        <div class="col-6 col-md-4">


                                <div class="service-box">

                              
                                    <img data-src="https://trulabs.in//uploads/category_icons/7768dbc36b89cbda4cbc1387171a969f.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/7768dbc36b89cbda4cbc1387171a969f.png">

                                    <h5>

                                        Routine (Pathology)
                                    </h5>

                                    <p>

                                        Full range of testing services including regular blood-work or urine testing as part of a checkup or specialized tests to diagnose rare conditions.
                                    </p>

                                </div>

                        

                        </div>

                    
                        <div class="col-6 col-md-4">
                                <div class="service-box">


                               

                                    <img data-src="https://trulabs.in//uploads/category_icons/13f65de9c95bd84be2f47b57dec646d2.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/13f65de9c95bd84be2f47b57dec646d2.png">

                                    <h5>

                                        Clinical Biochemistry
                                    </h5>

                                    <p>

                                        Complete analysis of biological fluids or tissues like blood, urine, and other body fluids for specific chemical constituents or physiologic processes.
                                    </p>

                                </div>

                         

                        </div>

                    
                        <div class="col-6 col-md-4">


                                <div class="service-box">

                                
                                    <img data-src="https://trulabs.in//uploads/category_icons/23c54eb83080ff19f52cdb33f229321d.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/23c54eb83080ff19f52cdb33f229321d.png">

                                    <h5>

                                        Serology
                                    </h5>

                                    <p>

                                        Tests designed to detect multiple classes of immunoglobulins (e.g antibody vs. IgG or IgM) consistent with immunity to diseases.
                                    </p>

                                </div>

                        

                        </div>

                    
                        <div class="col-6 col-md-4">

                                <div class="service-box">


                             
                                    <img data-src="https://trulabs.in//uploads/category_icons/335c7efc522df639a582a623bfd7125e.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/335c7efc522df639a582a623bfd7125e.png">

                                    <h5>

                                        Immunology
                                    </h5>

                                    <p>

                                        Complete analysis of body's immune system and its functions or disorders through a series of tests including Rheumatoid factor and HLA typing.
                                    </p>

                                </div>


                        </div>

                    
                        <div class="col-6 col-md-4">


                                <div class="service-box">

                               
                                    <img data-src="https://trulabs.in//uploads/category_icons/9734925dc489efe296bf5f3b851feb22.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/9734925dc489efe296bf5f3b851feb22.png">

                                    <h5>

                                        Special (Pathology)
                                    </h5>

                                    <p>

                                        Specialized testing concerned with cell and tissue analysis and involves cytology, histology, and autopsy, performed by well-trained professionals.
                                    </p>

                                </div>

                            

                        </div>

                    
                        <div class="col-6 col-md-4">


                                <div class="service-box">
                                    <img data-src="https://trulabs.in//uploads/category_icons/6ed889dd7fa693c2af9126cb726f59dc.png" class=" ls-is-cached lazyloaded" src="https://trulabs.in//uploads/category_icons/6ed889dd7fa693c2af9126cb726f59dc.png">
                                    <h5>

                                        Arthrities
                                    </h5>

                                    <p>

                                        Arthrities
                                    </p>

                                </div>

                            </a>

                        </div>

                    
                </div>

            </div>

            
        </div>
        <div class="bg-about d-flex" style="margin-top:15px;padding:10px;">
        	<div class="container align-self-center">
                <h1 class="package-title" style="color:white;font-weight:50px;"><b> We Ensure Safe Diagnoses &amp; Effective Therapies </b></h1>
            </div>
        </div>
        <div class="container-fluid sec-mar">
            <div class="container">
                <div class="row d-flex">
					<div class="col-md-8 align-self-center">
						<h4>Global Diagnosis is emerging as trusted name for range of diagnosis test services using expert knowledge and medical technology. Trulabs provide the best turnaround times due to advanced instrumentation and systems used in specimen receiving, tracking, and testing. </h4>
						<h4>Every Trulab employee has dedication to perform with best practices ensuring transparency, accountability, and fairness. Our team includes biochemists, microbiologists, medical technicians and lab assistants who ensure precision in every test for making a true difference in lives of our patients.</h4>
						<ul class="pros-list">
							<li><i class="fa fa-check" aria-hidden="true"></i> Home Specimen Pickup</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Easy Payments Process</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Specific Pathology Services</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Prompt Electronic Reporting</li>
						</ul>
					
					</div>
<!--					right column-->
					<div class="col-md-4 align-self-center R-col-mar" style="background-color:slateblue;margin-top:2%;border:2px solid blue;">
						<div class="package-contact">
                            <div class="p-3 border">
                                <div class="text-center">
                                	<h5 class="text-white">Opening Hours</h5>
                                </div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Monday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 18.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Tuesday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 18.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Wednesday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 18.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Thursday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 18.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Friday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 18.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Saturday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 15.00</span>
								</div>
								<div class="working-hours-day">
									<div class="working-hours-day-left">
										<span class="working-hours-day-name"> Sunday</span>
									</div>
									<span class="working-hours-day-hours"> 10.00 - 15.00</span>
								</div>
                            </div>
                        </div>
					</div> 
                </div>
            </div>
        </div>
        <div class="container-fluid sec-pad bg-grey">
        	<div class="container">
        		<div class="text-center">
                    <h1 class="sec-title">
                         Why choose us?
                        <hr class="hr-heading">
                    </h1>
                </div>
                <div class="feat-sec">
                	<div class="row">
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat1-staff.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">DOCTOR YOU CHOOSE</h5>
									<p>We have a team of highly specialized professionals who ensure precision in every single test</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat2-healthcare.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">YOUR HEALTHCARE</h5>
									<p>Our laboratory has been designed with a vision for technology and commitment for quality</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat3-support.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">ALWAYS THERE FOR YOU</h5>
									<p>We created efficient logistics network is crucial to maintain proper specimen collection for you</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat4-nursing.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">NURSING STAFF</h5>
									<p>Our nursing staff always maintains a warm patient-centric approach to uphold the highest standards</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat5-emergency.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">EMERGENCY SERVICES</h5>
									<p>Compassion and support for individuals seeking medical care where it's needed, when it's needed. </p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="media d-flex feat-box">
								<div class="media-left  align-self-center">
									<img src="https://trulabs.in/images/feat6-hospital.png" class="media-object">
								</div>
								<div class="media-body align-self-center">
									<h5 class="media-heading">PREMIUM FACILITIES</h5>
									<p>We coordinate the most effective diagnostic services through a wide-range of premium services.  </p>
								</div>
							</div>
						</div>
					</div>
                </div>
        	</div>
        </div>
<!-- -->
    </div>
    </div>
    <div class="footer_div">
		<div class="container" style="background-color:slateblue;padding-bottom:5%;margin-bottom:3%;">
			<img src="../images/footerdashboard.jpeg" class="img-responsive center-block" style="padding-top:10px;padding-bottom:25px;">	

			<div class="row">
				<div class="footer_mid">
					<div class="col-sm-5" style="padding-left:15%;">
						<div class="footer_addr">
							<div class="footer_addr1">
								<i class="fa fa-map-marker fa-2x"></i>
							</div>
							<div class="footer_addr12">

								<p>
									<b>Address</b><br><span>Ragavs Diagnostic &amp; Research Centre Pvt Ltd<br>
										No. 10/104-1, Patalamma Temple Road(Anebande Road)<br>
										3rd Block, Jayanagar<br>
										Bangalore - 560011</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3" style="padding-left:5%;">
						<div class="footer_phone">
							<div class="footer_phone1">
								<i class="fa fa-phone fa-2x"></i>
							</div>
							<div class="footer_phone12">
								<p><b>Phone</b><br><span>080-26531555/56/57</span><br><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26549279</span><br><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26534594/95</span><br><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26640080</span><br><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26640086</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="padding-left:10%;">
						<div class="footer_mail">
							<div class="footer_mail1">
								<i class="fa fa-envelope-o fa-2x"></i>
							</div>
							<div class="footer_mail12">
								<p><b>E-Mail ID</b><br><span>info@ragavsdiagnostics.com</span></p>
							</div>
						</div>
                      	<br>
                      	<div class="footer_mail">
							<div class="footer_mail1">
								<i class="fa fa-clock-o fa-2x"></i>
							</div>
							<div class="footer_mail12">
								<p><b>Lab</b><br><span>Monday to saturday 7am to 9pm</span><br><span>Sunday 7am to 9pm</span></p>
                              	<p><b>Radiology</b><br><span>24x7</span></p>
                              <p></p>
							</div>
						</div>
					</div>
				</div>	
				
			</div>	


		
	</div>
    <!-- -->
    <div class="copy_right" style="background-color:black;color:White;text-align:center;padding-top:3%;padding-bottom:1%;">
		<div class="container">
			<div class="copyright">
				<p>Copyright © 2018 Ragavs Diagnostic <span class="line_height">|</span> <strong> <br class="visible-xs">Developed by : </strong><a href="http://jayblues.com/" target="_blank" class="jayblues">Jay<span class="blues">Blues</span> Technologies</a></p>				
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