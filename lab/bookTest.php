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
    <!-- patient style-->
    <link rel="stylesheet" type="text/css" href="../patient/panelstyle.css?v=<?php echo time()?>">
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
</link>
</head>
<style>
    #booktest{
        background-color:slateblue;
        font-size:20px;

    }
    #booktestspan{
        color:white;
    }
</style>
<body>
<?php  include('labheader.php');?>
    <div class="main-content">
   <div class="booktest">
       <div class="container-fluid">

       <div class="card">
            <div class="card-body">
              <center><h4>Book a Test Now!</h4></center><br>
              <form class="form-group" method="post" action="Action.php">
                <div class="row"> 
                    
                  <div class="col-md-4"><label>Patient Name :</label></div>
                  <div class="col-md-8">
                     <input type="text" class="form-control" name="name" placeholder="Patient Fullname *"required>
                  
                  </div><br><br>
                  <div class="col-md-4"><label>Mobile Number :</label></div>
                  <div class="col-md-8">
                     <input type="text" class="form-control" name="mobile" placeholder="Contact Number *"required>
                     </div><br><br>

                     <div class="col-md-4"><label>City :</label></div>
                  <div class="col-md-8">
                     <input type="text" class="form-control" name="city" placeholder="City *"required>
                     </div><br><br>
                     <div class="col-md-4"><label>Local Address :</label></div>
                  <div class="col-md-8">
                     <input type="text" class="form-control" name="address" placeholder="Complete local Address*"required>
                     </div><br><br>
                   <div class="col-md-4">
                          <label for="dept">Department :</label>
                        </div>
                        <div class="col-md-8">
                          <select name="dept" class="form-control" id="deptt">
                              <option value="" disabled="" selected="">Select Department</option>
                              <option data-value="General">General</option><option data-value="MicroBiology" >MicroBiology</option><option data-value="Serology">Serology</option><option data-value="Haematology">Haematology</option>   
                              <option data-value="BioChemistry">BioChemistry</option> <option data-value="Radiology">Radiology</option> 
                              <option data-value="Clinical Pathology">Clinical_Pathology</option> 
                                
                                                  </select>
                        </div>

                        <br><br>
<!-- to display particular doctors for specialization-->
                        <script>
                      document.getElementById('deptt').onchange = function foo() {
                        let dept = this.value; 
                  
                       document.getElementById('test').value="";
                        let tests = [...document.getElementById('test').options];
                        
                        tests.forEach((element, index, arr)=>{
 // onchange the previously set style attribute is delted n set to  default
 console.log(element.getAttribute("data-spec"));
                        arr[index].setAttribute("style","");
                          if (element.getAttribute("data-spec") != dept ) {
                            arr[index].setAttribute("style","display: none");
                            
                          }
                        });
                      };

                  </script>

              <div class="col-md-4"><label for="doctor">Test Name :</label></div>
                <div class="col-md-8">
                    <select name="test" class="form-control" id="test" required="required" value="">
                      <option value="" disabled="" selected="">Select Test</option>
           <?php
           $sql="SELECT * FROM testslist";
           $result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){


           ?>
             <option value="<?php  echo ($row['Test']);?>" data-value="<?php  echo ($row['price']);?>" 
             data-time="<?php  echo ($row['time']);?>"
             data-spec="<?php  echo ($row['Department']);?>"><?php  echo ($row['Test']);?></option>
<?php }?>
              </select>
                  </div><br><br> 
                        <script>
              document.getElementById('test').onchange = function updateFees(e) {
                var selection = document.querySelector(`[value=${this.value}]`).getAttribute('data-value');
                document.getElementById('testFees').value = selection;
                
                var selection1 = document.querySelector(`[value=${this.value}]`).getAttribute('data-time');
                document.getElementById('time').value = selection1;
              };
            </script>

                  
                  <div class="col-md-4"><label for="consultancyfees">
                                Price(in Rs.)
                              </label></div>
                              <div class="col-md-8">
                              <!-- <div id="docFees">Select a doctor</div> -->
                              <input class="form-control" type="text" name="fees" id="testFees" readonly="readonly">
                  </div><br><br>

                  <div class="col-md-4"><label>Appointment Date</label></div>
                  <div class="col-md-8"><input type="date" class="form-control datepicker" name="date" required></div><br><br>

                  <div class="col-md-4"><label for="consultancyfees">
                                Sample Collection Time
                              </label></div>
                              <div class="col-md-8">
                        
                              <input class="form-control" type="text" name="time" id="time" readonly="readonly">
                  </div><br><br>
                  <div class="col-md-4"><label>Age :</label></div>
                  <div class="col-md-8">
                     <input type="text" class="form-control" name="age" placeholder="Age *"required>
                     </div><br><br>
                     <div class="col-md-4"><label>Gender :</label></div>
                  <div class="col-md-8">
                     
                     <input type="radio" name="gender" value="male"> Male &nbsp &nbsp
                     
                     <input type="radio" name="gender" value="female"> Female &nbsp &nbsp
                     
                     <input type="radio" name="gender" value="other"> Other
                     </div><br><br>
                  <div id="submitdiv">
                    <input type="submit" name="bookTest" value="Book Test" class="btn btn-primary" id="appbtn">
                  </div>                                   
                </div>
              </form>
            </div>
          </div>

       </div>
       <div class="container">
           
<h2 class="justify-content-center">List of Popular Tests</h2>
           <div class="row">
               
               <div class="col-md-12 d-flex flex-wrap">
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
</div>
    </div>
   
</div><!-- -->
<div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
</div>
    </div>
      
    
    
    <!-- -->

               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
</div>
    </div>
      
           </div>
           <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
</div>
    </div>
      
       </div>
       <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
</div>
    </div>
      
   </div>
   <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="tests-category-product-item lazy">
            
  <h4 class="tests-category-product-name text-uppercase" data-id="cholestrol-serum">
<a href="#">CHOLESTEROL - SERUM</a>
</h4>
<div class="tests-category-product-info">
<label >Pre Test Infromation :</label>
<p>12 hours fasting is required before the test. This means you are not supposed to consume food or any other fluids, except water.</p>
</div>
<div class="tests-category-product-report">
    <label>Report Delivery :</label>
<p>Same Day</p>
</div>
<p class="tests-category-product-price"></p>
<div class="tests-category-product-item-footer lazy">
<div class="d-flex align-items-center justify-content-between" data-id="cholestrol-serum">
<a href="#" class="btn btn-outline-primary btn-outline-gray gray-text">View Details</a>
<form action="">
<button type="submit" class="btn btn-outline-primary btn-outline-gray gray-text">Add to Cart</button>
</form>
</div>
<p class="tests-category-product-home-available text-center">
<span class="ti-home"></span>
Home Collection available
</p>
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