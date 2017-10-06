<?php 
include "../forms/staffloginver.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Staff Page </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
   <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img style='width:85px;height:85px;' src="<?php echo $_SESSION['logo'] ?>" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <img class="img-circle" style='width:80px;height:80px;' src="<?php echo $_SESSION['Photo'] ?>" />

                   <a href="staff_logout.php" class="btn btn-warning">
          <span class="glyphicon glyphicon-log-out"></span> <b>LOG OUT</b>
        </a> 

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="stafff.php" ><i class="fa fa-desktop "></i> Home </a>
                    </li>
                   

                    <li>
                        <a href="child_signup.php"><i class="fa fa-table "></i> Register a Child</a>
                    </li>
                    <li class="active-link">
                        <a href="staffview.php"><i class="fa fa-edit "></i> Registered Children </a>
                    </li>


                    <li>
                        <a href="adopted.php"><i class="fa fa-qrcode "></i> Adopted Children </a>
                    </li>
                    <li>
                        <a href="sponsored.php"><i class="fa fa-bar-chart-o"></i> Sponsored Children</a>
                    </li>

                    <li>
                        <a href="adoptionform.pdf"><i class="fa fa-edit "></i> Adoption Form </a>
                    </li>
                    <li>
                        <a href="sponsorform.pdf"><i class="fa fa-table "></i> Sponsorship Form </a>
                    </li>
                     <li>
                        <a href="adoption.pdf"><i class="fa fa-edit "></i> Adoption Manual </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center">UPDATE CHILD DETAILS HERE! </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <?php
                  include ('../connect/connect.php');
  $adm_no=$_REQUEST['adm_no'];
  $sql= "SELECT * FROM child WHERE Admission_number = '$adm_no'";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1){
            while($row=mysqli_fetch_assoc($result)){
    $passport=['Image'];
        $firstname=$row['First_name'];
    $lastname=$row['Last_name'];
    $homeid=$row['Home_ID'];
    $adm_no=$row['Admission_number'];
    $description=$row['Description'];
    }
  }

?>

<div class="container">
  
  <div class="col-lg-8 well">
  <div class="row">
    <form class="inline"id="form_staff" role="form" action="childupdate_connect.php" method="POST" enctype="multipart/form-data">
      <legend><a href="staffview.php" class="btn btn-danger right" role="button" valign="right"><span class="glyphicon glyphicon-off"></span> close </a> </legend>
      <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-4 form-group">
                  <label> Child's passport: </label>
                  <input type="file" name="image" />
                </div>
              </div>
              <div class="row">
          <div class="col-sm-4 form-group">
            <label> First name: </label>
            <input type="text"class="form-control" name="firstname" placeholder="First name" value="<?php echo $firstname ?>">
          </div>
            
          <div class="col-sm-4 form-group">
            <label> Last name: </label>
            <input type="text"class="form-control" name="lastname" placeholder="Last name" value="<?php echo $lastname ?>">
          </div>
    
        </div>
      
        <div class="row">
          <div class="col-sm-4 form-group">
            <label> Home ID: </label>
            <input type="text"class="form-control" name="childrenshomeid" placeholder="Home ID" value="<?php echo $homeid ?>">
          </div>
          
          <div class="col-sm-4 form-group">
            <label> Adm no: </label>
            <input type="int" class="form-control" name="admno" placeholder="Admission number" value="<?php echo $adm_no ?>">
          </div>
          
        </div>
        <div class="row">
      
          <div class="col-sm-8 form-group">
            <label> Description: </label>
            <span class="help-block"> * Brief description of the child including date of birth, date admitted in your institution, his/her age and education details.</span>
            <textarea style="height:200px; width:500px"; class-"col-sm-8 form-control" name="description" placeholder=" Brief description of the child including date of birth, date admitted in your institution, his/her age and educational details"> </textarea>
          </div>

      
          
      </div>
            
            <div class="row">
        <div class="col-sm-2 form-group">
        
          <button type="submit" class="btn btn-success" name="submit" ><span class="glyphicon glyphicon-plus-sign"></span> Update </button>
        </div>
        <div class="col-sm-2 form-group">
          <button type="reset" class="btn btn-warning" name="reset" ><span class="glyphicon glyphicon-minus-sign"> Reset </button>
        </div>
      </div>
      
    </div>
    </form>
  </div>
</div>
</div>
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 maseno.ac.ke | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">GK, VK & EM</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>