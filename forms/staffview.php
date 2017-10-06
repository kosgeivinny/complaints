<?php 
include "../forms/staffloginver.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Page</title>
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
                        <a href="adoption.pdf"><i class="fa fa-edit "></i>Adoption Manual </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"> REGISTERED CHILDREN </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="container">
<?php

include "../connect/connect.php";
$homeid=$_SESSION['id'];

    $rus = "SELECT Image,First_name,Last_name,Home_ID,Admission_number,Description FROM child WHERE child.Home_ID='$homeid'";
    $sur = $conn->Query($rus);
     
    echo "<table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
    <thead> 
    <tr class='info'><th>Profile Photo</th><th>First Name</th><th>Last Name</th><th>Admission Number</th><th>Description</th><th></th></tr></thead>";
    
    while($row =mysqli_fetch_assoc($sur)) {
        $ig=$row['Image'];
        $gi="<img src=".$ig." style='width:150px;height:150px;''>";
        echo "<tr><td> $gi </td><td>". $row["First_name"] . "</td><td>". $row["Last_name"]."</td><td>".$row["Admission_number"]."</td><td>".$row["Description"]."</td>";
        echo "<td><a href='childupdate.php? adm_no=".$row['Admission_number']."'>
        <button class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\">Edit</span></button>
        </a>
        <a href='childdelete.php? adm_no=".$row['Admission_number']."'><br><br>
        <button class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-delete\">Delete</span></button></a></td></tr>";
    }
    echo "</table>";
      
      mysqli_free_result($sur);
    

    ?>
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
