<?php
session_start();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Panel</title>

    
    <link rel="shortcut icon" type="/image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="panelstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <style>
#bookapp{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
}
</style>
</head>
<body>
    <div class="wrapper">
    <?php include('Psidebar.php')?>
    <div id="content">

    <?php include('PheadNav.php')?>
    <div class="container-fluid">
    <div class="tab-pane fade active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list" aria-expanded="true">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Create an appointment</h4></center><br>
              <form class="form-group" method="post" action="panel.php">
                <div class="row"> 
                   <div class="col-md-4">
                          <label for="spec">Specialization:</label>
                        </div>
                        <div class="col-md-8">
                          <select name="spec" class="form-control" id="spec">
                              <option value="" disabled="" selected="">Select Specialization</option>
                              <option data-value="General">General</option><option data-value="Cardiologist">Cardiologist</option><option data-value="Pediatrician">Pediatrician</option><option data-value="Neurologist">Neurologist</option>   
                              <option data-value="Dietician">Dietician</option> <option data-value="Neurologist">Nephrologist</option> 
                              <option data-value="Dermatologist">Dermatologist</option> 
                                
                                                  </select>
                        </div>

                        <br><br>
<!-- to display particular doctors for specialization-->
                        <script>
                      document.getElementById('spec').onchange = function foo() {
                        let spec = this.value;   
                         console.log(spec);
                        document.getElementById('doctor').value="";
                        let docs = [...document.getElementById('doctor').options];
                        
                        docs.forEach((element, index, arr)=>{
 // onchange the previously set style attribute is delted n set to  default
                        arr[index].setAttribute("style","");
                          if (element.getAttribute("data-spec") != spec ) {
                            arr[index].setAttribute("style","display: none");
                            
                          }
                        });
                      };

                  </script>

              <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                <div class="col-md-8">
                    <select name="doctor" class="form-control" id="doctor" required="required" value="">
                      <option value="" disabled="" selected="">Select Doctor</option>
                
             <option value="Dr_Raza_yusuf" data-value="2000" data-spec="General"> Dr Raza Yusuf</option>

             <option value="Dr_Shujada" data-value="1700" data-spec="General">Dr Shujadah</option>
             
             <option value="Dr_Abdul_Lateef" data-value="2500" data-spec="General">Dr Abdul Lateef</option>

             <option value="Dr_Numaan_Raina" data-value="1000" data-spec="Cardiologist">Dr Numaan Raina</option> 

             <option value="Dr_Uzair_Reyaz" data-value="3000" data-spec="Neurologist">Dr Yasir Reshi</option>

             <option value="Dr_Uzair_Reyaz" data-value="2500" data-spec="Dietician">Dr Uzair Reyaz</option>

             <option value="Dr_Tafazul_Majeed" data-value="2500" data-spec="Pediatrician">Dr Tazazul Majeed</option>

             <option value="Dr_Javaid_Magray" data-value="500" data-spec="Nephrologist">Dr Javaid Magray</option>

             <option value="Dr_Tahira_Majeed" data-value="5000" data-spec="Dermatologist">Dr Tahira Majeed</option>

              </select>
                  </div><br><br> 
                        <script>
              document.getElementById('doctor').onchange = function updateFees(e) {
                var selection = document.querySelector(`[value=${this.value}]`).getAttribute('data-value');
                document.getElementById('docFees').value = selection;
                
              };
            </script>

                  
                  <div class="col-md-4"><label for="consultancyfees">
                                Consultancy Fees
                              </label></div>
                              <div class="col-md-8">
                              <!-- <div id="docFees">Select a doctor</div> -->
                              <input class="form-control" type="text" name="fees" id="docFees" readonly="readonly">
                  </div><br><br>

                  <div class="col-md-4"><label>Appointment Date</label></div>
                  <div class="col-md-8"><input type="date" class="form-control datepicker" name="date"></div><br><br>

                  <div class="col-md-4"><label>Appointment Time</label></div>
                  <div class="col-md-8">
                    <!-- <input type="time" class="form-control" name="apptime"> -->
                    <select name="time" class="form-control" id="time" required="required">
                      <option value="" disabled="" selected="">Select Time</option>
                      <option value="08:00:00">8:00 AM</option>
                      <option value="10:00:00">10:00 AM</option>
                      <option value="12:00:00">12:00 PM</option>
                      <option value="14:00:00">2:00 PM</option>
                      <option value="16:00:00">4:00 PM</option>
                    </select>
                  </div><br><br>
                  <div id="submitdiv">
                    <input type="submit" name="app-submit" value="Create new entry" class="btn btn-primary" id="appbtn">
                  </div>                                   
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
    <!-- -->
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