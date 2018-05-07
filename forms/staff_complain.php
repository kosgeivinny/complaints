<?php
include "../forms/staffloginver.php";
?>
<!DOCTYPE html>
<html lang="en">
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
                    <img style='width:85px;height:85px;' src="<?php echo $_SESSION['Photo'] ?>" />

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
                    <a><button type="button"> My account </button></a>
                </li>
                <li>
                    <a><button type="button"> Academic </button></a>
                </li>
                <li>
                    <a><button type="button"> General </button></a>
                </li>

                <li>
                    <a href="staff.php" ><i class="fa fa-desktop "></i> Disciplinary case </a>
                </li>


                <li class="active-link">
                    <a href="staff_complain.php"><i class="fa fa-table "></i> Enter Complain</a>
                </li>
                <li>
                    <a href="staffview.php"><i class="fa fa-edit "></i> Pending Complains </a>
                </li>
                <li>
                    <a href="staff_solved.php"><i class="fa fa-bar-chart-o"></i> Solved Complains</a>
                </li>



            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">POST YOUR COMPLAIN HERE! </h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="container">

                <div class="col-lg-8 well">
                    <div class="row">
                        <form class="inline"id="form_staff" role="form" action="stacomplain_connect.php" method="POST" enctype="multipart/form-data">
                            <legend>  <a href="staff.php" class="btn btn-danger right" role="button" Valign="right"><span class="glyphicon glyphicon-off"></span> close </a> </legend>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label> First name: </label>
                                        <input type="text"class="form-control" name="firstname" placeholder="First name">
                                    </div>

                                    <div class="col-sm-4 form-group">
                                        <label> Last name: </label>
                                        <input type="text"class="form-control" name="lastname" placeholder="Last name">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label> Job Title: </label>
                                        <input type="text"class="form-control" name="job" placeholder="eg.Security officer">
                                    </div>

                                    <div class="col-sm-4 form-group">
                                        <label> Department: </label>
                                        <select class="form-control" name="department">
                                            <option> Education </option>
                                            <option> Computing and Informatics </option>
                                            <option> Medicine </option>
                                            <option> Public Health </option>
                                            <option> Political Science</option>
                                            <option> Criminology </option>
                                            <option> Biochem </option>
                                            <option> Nursing </option>
                                            <option> Public Administration </option>
                                            <option> Agricultural Economics</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-sm-8 form-group">
                                        <label> Complain: </label>
                                        <span class="help-block"> * Explanation of the complain in details.</span>
                                        <textarea style="height:200px; width:500px"; class="col-sm-8 form-control" name="complain"> </textarea>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-sm-2 form-group">

                                        <button type="submit" class="btn btn-success" name="submit" ><span class="glyphicon glyphicon-plus-sign"></span> Post </button>
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
            &copy;  2018 Online Complain System | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank"> VK </a>
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