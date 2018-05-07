<?php
include "../forms/adminloginver.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Page </title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
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

                   <a href="admin_logout.php" class="btn btn-warning">
          <span class="glyphicon glyphicon-log-out"></span> <b>LOG OUT</b>
        </a>

                </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">



                <li class="active-link">
                    <a href="admin.php" ><i class="fa fa-desktop "></i> Home </a>
                </li>


                <li>
                    <a href="students_complains.php"><i class="fa fa-table "></i> Students Complains</a>
                </li>
                <li>
                    <a href="staff_complains.php"><i class="fa fa-edit "></i> Staff Complains </a>
                </li>
                <li>
                    <a href="solved_student.php"><i class="fa fa-qrcode "></i> Solved Student Complains </a>
                </li>
                <li>
                    <a href="solved_staff.php"><i class="fa fa-bar-chart-o"></i> Solved Staff Complains</a>
                </li>



            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">ENTER YOUR RESPONSE HERE! </h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <?php
            include ('../connect/connect.php');
            $name=$_REQUEST['name'];
            $sql= "SELECT * FROM student_complain WHERE First_name = '$name'";
            $result = mysqli_query($conn,$sql);
            $numrows=mysqli_num_rows($result);
            if($numrows==1){
                while($row=mysqli_fetch_assoc($result)){
                    $firstname=$row['First_name'];
                    $course=$row['Course'];
                    $department=$row['Department'];
                    $complain=$row['Complain'];
                }
            }

            ?>

            <div class="container">

                <div class="col-lg-8 well">
                    <div class="row">
                        <form class="inline"id="form_staff" role="form" action="studentresponse_connect.php" method="POST" enctype="multipart/form-data">
                            <legend><a href="students_complains.php" class="btn btn-danger right" role="button" valign="right"><span class="glyphicon glyphicon-off"></span> close </a> </legend>
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label> First name: </label>
                                        <input type="text"class="form-control" name="firstname" placeholder="First name" value="<?php echo $firstname ?>">
                                    </div>

                                    <div class="col-sm-4 form-group">
                                        <label> Course: </label>
                                        <input type="text"class="form-control" name="course" placeholder="Course" value="<?php echo $course ?>">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label> Department: </label>
                                        <input type="text" class="form-control" name="department" placeholder="Department" value= "<?php echo $department ?>">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-8 form-group">
                                        <label> Complain: </label>
                                        <span class="help-block">* Explanation of the complain in details.</span>
                                        <input style="height:200px; width:500px"; class="col-sm-8 form-control" name="complain" value= "<?php echo $complain ?>"> </input>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-sm-8 form-group">
                                        <label> Your response: </label>
                                        <span class="help-block"> * Response of the complain.</span>
                                        <textarea style="height:200px; width:500px"; class="col-sm-8 form-control" name="response"> </textarea>
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