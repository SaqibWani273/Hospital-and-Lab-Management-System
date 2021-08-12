<html>
<head>
	<title>Hospital_Project</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/title.ico" />
<link rel="stylesheet" type="text/css" href="indexstyle.css?v=<?php echo time()?>">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- sweet alert-->
<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
<style >
     .form-control {
    border-radius: 0.75rem;
}

</style>

<script>
    var check = function(x) {

if(x=='hosp'){
var password=document.getElementById('password').value;
var cpassword= document.getElementById('cpassword').value;
var msg=document.getElementById('message');
}
else{

var password=document.getElementById('lpassword').value;
var cpassword= document.getElementById('lcpassword').value;
var msg=document.getElementById('lmessage');

}

  if (password==cpassword){
    msg.style.color = '#5dd05d';
    msg.innerHTML = 'Matched';
  } else {
msg.style.color = '#f55252';
msg.innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen(x)
{
    if(x=='hosp')
    {
        var pass1 = document.getElementById("password"); 
        var cpass=document.getElementById("cpassword");
    }
    else{
        var pass1 = document.getElementById("lpassword"); 
        var cpass=document.getElementById("lcpassword");
    }
     
    if(pass1.value.length<6)
    {  
       // alert("Password must be at least 6 characters long. Try again!");  
      swal("ERROR!", "Password must be at least 6 characters long. Try again!", "error");
        return false; 

      } 

  if(pass1.value !==
    cpass.value){
        swal("ERROR!", "Passwords Donot Match. Try again!", "error");
        return false;  
    }
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark " id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="pindex.php" style="margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><img src="images/favicon.png" alt="hospital logo " width="50px" height="50px">&nbsp GLOBAL HOSPITALS</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h5>HOME</h5></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h5>ABOUT US</h5></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h5>CONTACT</h5></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 60%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li  class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lab" role="tab" aria-controls="admin" aria-selected="false">Lab Diagnosis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="patient/patientreg.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check("hosp");' required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Age *" id="age" name="age"  maxlength="3" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="other">
                                                    <span> other </span> 
                                                </label>
                                            </div>
                                            <a href="patient/login.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check("hosp");' required/><span id='message'></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="address" class="form-control" placeholder="Address *" id="address" name="address"  required/>
                                        </div>

                                        <input type="submit" class="btnRegister" name="patreg" onclick="return checklen('hosp');" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>  <!-- patient content div -->

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="doctor/doctorpanel.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Doctor Email *" name="email"  required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>  <!-- doctor content div -->

                        <div class="tab-pane fade show" id="lab" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">

                            <li class="nav-item">
                                
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#labpatient" role="tab" aria-controls="home" aria-selected="true"> Lab Patient</a>
                            </li>


                            <li class="nav-item">
                               
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#labadmin" role="tab" aria-controls="profile" aria-selected="false">lab Admin</a>
                            </li>
                            </ul>
                            
                         <div class="tab-content" id="myTabContent" style="padding-top:50px;">
                            <div class="tab-pane fade show active" id="labpatient" role="tabpanel" aria-labelledby="home-tab">
                                  <h3  class="register-heading">Lab Patient Registration</h3>
                                <form method="post" action="lab/Action.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="lpassword" name="password" onkeyup='check("lab");' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="lab/labpatientlogin.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="lcpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check("lab");' required/><span id='lmessage'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="labpatsub" onclick="return checklen('lab');" value="Register"/>
                                    </div>
                                </div>
                            </form>
                            </div> <!-- labpatient content div -->

                            
                        
                            <div  class="tab-pane fade show" id="labadmin" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Login as LaB Admin</h3>
                             <form method="post" action="lab/Action.php">
                                <div class="row register-form">
                             
                                    <div class="col-md-6">
                                    
                                        <div class="form-group">
                                        
                                            <input type="text" class="form-control" placeholder="User Name *" name="username" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="labAdminsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div> <!-- labadmin content div-->
                        </div>  
                    </div>    <!-- lab content div -->
                    
                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="Admin/adminAction.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adminsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div><!-- admin content div -->
                  </div>     <!-- reister right div-->
                </div><!-- row div -->
            </div> <!-- container div-->
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  