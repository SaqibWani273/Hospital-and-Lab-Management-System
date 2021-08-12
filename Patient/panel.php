<?php
include("../dbconnection.php");
session_start();
if(isset($_POST['app-submit'])){
  $patient=$_SESSION['username'];
  $gender=$_SESSION['gender'];
  $email=$_SESSION['email'];
  $contact=$_SESSION['phone'];
  $doctor=$_POST['doctor'];
  
  $fees=$_POST['fees'];
  date_default_timezone_set("Asia/Kolkata");
  $time1=$_POST['time'];
  $date1=$_POST['date'];
  $time=strtotime($time1);
  $date=strtotime($date1);
 // $userstatus=1;
 // $docstatus=1;

 $cur_time=date("H:i:s");
 $cur_date=date("d-m-y");
 //if(date("d-m-y",$date)>=$cur_date){
if(date("d-m-y",$date)<$cur_date||date("d-m-y",$date)==$cur_date&&date("H:i:s",$time)<=$cur_time){
  echo("<Script>
  alert('Select time and date in future');
  window.location.href='pbookApp.php';
  </script>");
}
else
{
$sql="select * from appointmenttable where doctor='$doctor' and time='$time1' and date='$date1'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if(is_array($row)&&!empty($row)){
  echo("<Script>
  alert('The appointment that you selected has already been filled.Please selected a different appointment date or time!');
  window.location.href='pbookApp.php';
  </script>");
}
else
{
  $sql1="insert into appointmenttable(id,patient,gender,email,contact,doctor,fees,date,time,userstatus,docstatus) values('','$patient','$gender','$email','$contact','$doctor','$fees','$date1','$time1','1','1')";
  $query=mysqli_query($con,$sql1) or die("error occured !".$con->error);
  if($query)
  echo("<Script>
  alert('The appointment Booked Successfully !');
  window.location.href='panel.php';
  </script>");
  else
  echo "<script>
  alert('Unable to process your request. Please try again!');
  
  </script>";
          }
}
}
if(isset($_GET['cancelUpdate'])){
  $id=$_GET['id'];
  $sql="select * from appointmenttable where id='$id'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $sql1="update appointmenttable set userstatus=0 where id = '$id'";
  $query=mysqli_query($con,$sql1);
  if($query)
  {
    $_GET['cancelUpdate']=0;
    echo("
    <script>
    alert('Appointment Cancelled Successfully!'); 
    </script>
    ");
  }
  //header("location:Dapps.php");
  
  }


  if(isset($_POST['generate_prescription'])){
    function generate_bill(mysqli $con){
        $id = $_POST['id'];
        $output='';
        $sql="select * from prescriptiontable where id='$id'";
        $query=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($query)){
          $output .= '<br/>
          <label> Patient ID : </label>'.$row["id"].'<br/><br/>
          <label> Patient Name : </label>'.$row["patient"].'<br/><br/>
          <label> Doctor Name : </label>'.$row["doctor"].'<br/><br/>
          <label> Appointment Date : </label>'.$row["date"].'<br/><br/>
          <label> Appointment Time : </label>'.$row["time"].'<br/><br/>
          <label> Disease : </label>'.$row["disease"].'<br/><br/>
          <label> Allergies : </label>'.$row["allergy"].'<br/><br/>
          <label> Prescription --> </label><pre>'.$row["prescription"].'</pre><br/><br/>
  
          
          ';
          echo $output;
      
        }
        
        return $output;
      }
require_once("../TCPDF/tcpdf.php");
$obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
$obj_pdf -> SetCreator(PDF_CREATOR);
$obj_pdf -> SetTitle("Generate Bill");
$obj_pdf -> SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
$obj_pdf -> SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$obj_pdf -> SetFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$obj_pdf -> SetDefaultMonospacedFont('helvetica');
$obj_pdf -> SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf -> SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
$obj_pdf -> SetPrintHeader(false);
$obj_pdf -> SetPrintFooter(false);
$obj_pdf -> SetAutoPageBreak(TRUE, 10);
$obj_pdf -> SetFont('helvetica','',12);
$obj_pdf -> AddPage();

$content = '';

$content .= '
    <br/>
    <h2 align ="center"> Global Hospitals</h2><br/>
    <h3 align ="center"> Patient\'s Prescription </h3><br/><br/>
    

';

$content .= generate_bill($con);
$obj_pdf -> writeHTML($content);
ob_end_clean();
$obj_pdf -> Output("bill.pdf",'I');
    }




  
 

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Patient Panel</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/title.ico" />
<link rel="stylesheet" type="text/css" href="panelstyle.css?v=<?php echo time()?>">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script  src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
        <!--delete-->
		
<style>
#dashboard{
  background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
}
</style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include('Psidebar.php');?>
   
        <!-- Page Content  -->
        <div id="content">
        <?php include("PheadNav.php");?>

        <div class="container-fluid container-fullw bg-white" >
              <div class="row rows">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                    <a href="PbookApp.php">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span></a>
                      <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4>                      
                      <p class="links cl-effect-1">
                        <a href="PbookApp.php" >
                          Book Appointment
                        </a>
                      </p>
                    </div>
                  </div>
                </div> <!-- end book appointment -->

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                    
                    <a href="PappHistory.php" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span></a>
                      <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2>
                    
                      <p class="cl-effect-1">
                        <a href="PappHistory.php" >
                          View Appointment History
                        </a>
                      </p>
                    </div>
                  </div>
                </div> <!-- end appointment history -->
                </div> <!-- end row-->
                <div class="row  rows">
           <!--     <div class="container-fluid container-fullw bg-white">-->
                <div class="col-sm-4" style="margin-top:5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                    
                    <a href="Pprescriptions.php" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span></a>
                      <h4 class="StepTitle" style="margin-top: 5%;">Prescriptions</h2>
                    
                      <p class="cl-effect-1">
                        <a href="Pprescriptions.php" >
                          View Prescription List
                        </a>
                      </p>
                    </div>
                  </div>
                </div> <!-- end view prescription -->
                <!-- profile-->
                <div class="col-sm-4" style="margin-top:5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <a href="PmyProfile.php" >
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i><i class="fa fa-user fa-stack-1x fa-inverse"></i>  </span></a>
											<h4 class="StepTitle" style="margin-top: 5%;">My Profile</h4>
											
											<p class="links cl-effect-1">
												
                      <a href="PmyProfile.php" >
													Update Profile
												</a>
											</p>
										</div>
                  </div>
                </div><!-- end profie-->
                    </div><!-- end row-->
         
            </div><!-- delete-->
            

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