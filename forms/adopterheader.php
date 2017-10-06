<?php 
include "../forms/adopterloginver.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Adopters page </title>

    <meta charset="utf-
    height: 150%;
    width: 320%;8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/custom.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/style1.css">
    <link href="../bootstrap/boot/bootstrapp.css" rel="stylesheet">
    <link href="../bootstrap/boot/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap/boot/agency.min.css" rel="stylesheet">
    <style>
    #id ol>li>a{
      font-size:18pt;
    }
    </style>
     
    </head>

    <body class="hold-transition skin-blue sidebar-mini" style="background-image:url(../images/staff.jpg);" >
        
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: grey;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"> ADOPTER PORTAL </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="adopter.php"> Adoption System </a></li>
        <li><a href="adopter.php"> <b>ADOPTER PORTAL</b></a></li>

          </ul>
      <ul class="nav navbar-nav navbar-right">
         <li>
      
        <?php echo $_SESSION['name'];?>
        
<img class="img-circle" style='width:80px;height:80px;' src="<?php echo $_SESSION['Photo'] ?>" />

 

      <a href="staff_logout.php" class="btn btn-warning btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> <b>Log out</b>
        </a>
      </li>
      </ul>    
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
</body>
</html>