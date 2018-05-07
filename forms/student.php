<?php
include "../forms/studentloginver.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Page</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                    <img style='width:85px;height:85px;' src="<?php echo $_SESSION['Photo'] ?>" />

                </a>

            </div>

            <span class="logout-spn" >
                  <img class="img-circle" style='width:80px;height:80px;' src="<?php echo $_SESSION['Photo'] ?>" />

                   <a href="student_logout.php" class="btn btn-warning">
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
                    <a><button type="button"> My account </button></a>
                </li>
                <li>
                    <a><button type="button"> Academic </button></a>
                </li>
                <li>
                    <a><button type="button"> General </button></a>
                </li>


                <li class="active-link">
                    <a href="student.php" ><i class="fa fa-desktop "></i> Disciplinary case </a>
                </li>


                <li>
                    <a href="student_complain.php"><i class="fa fa-table "></i> Enter Complain</a>
                </li>
                <li>
                    <a href="studentview.php"><i class="fa fa-edit "></i> Pending Complains </a>
                </li>


                <li>
                    <a href="student_solved.php"><i class="fa fa-qrcode "></i> Solved complains </a>
                </li>


            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>STUDENT DASHBOARD</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome <?php echo $_SESSION['name'];?>! </strong>
                    </div>

                </div>
            </div>
            <div class="well well-lg">
                <h3> HELP PROMOTE COMPLAIN MANAGEMENT IN OUR INSTITUTION </h3>

            </div>
            <!-- /. ROW  -->
            <div class="row text-center pad-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="student_complain.php" >
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Enter Complain</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="studentview.php" >
                            <i class="fa fa-users fa-5x"></i>
                            <h4>Pending Complains</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="student_solved.php" >
                            <i class="fa fa-wechat fa-5x"></i>
                            <h4>Solved Complains</h4>
                        </a>
                    </div>


                </div>

            </div>
            <!-- /. ROW  -->


            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2018 Online Complain System | Design by: <a href="#" style="color:#fff;" target="_blank"> VK </a>
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
