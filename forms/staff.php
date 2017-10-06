<?php 
include "../forms/staffloginver.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Staff Page </title>

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
        <span class="sr-only"> STAFF PORTAL </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="staff.php"> Adoption System </a></li>
        <li><a href="staff.php"> <b>STAFF PORTAL</b></a></li>

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
        <div class="wrapper">

            <div class="container">

               <br>
               <br>
            
      
             <div class="panel panel-info" style="margin-top:20px;">
              <div class="panel-header">
              
            <div class="well well-lg">
              <h1> WELCOME!</h1>
              <h4>HELP A CHILD TODAY, SECURE THE FUTURE OF OUR NATION</h4>
            
             </div>
              </div>
              <div class="panel-body" style="background: none;">
                <center><form action="staffview.php" method="post">
                  <input type="button" class="btn btn-success btn-lg" value="Register Children" onclick="window.location.href='child_signup.php'"><br><br>
                 </form>

                  <input type="submit" class="btn btn-danger btn-lg"  value="View Registered" onclick="window.location.href='staffview.php'"><br><br>
                  <input type="submit" class="btn btn-info btn-lg"  value="View Sponsored" onclick="window.location.href='sponsored.php'"><br><br>
                  <input type="submit" class="btn btn-warning btn-lg"  value="View Adopted" onclick="window.location.href='adopted.php'"><br><br>
                </center>
              </div>
             </div>
            
             
          
          </div>

        </div>
              
    </body>

</html>

