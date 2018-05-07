<!DOCTYPE html>
<html lang="en">

<head>
    <title> Student Registration </title>

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

</head>

<body style="background-image:url(../images/bg.jpg);">

<div class="container">
    <br>
    <div>
        <div id="upmenu">
            <img src="../images/header.jpg" indent="centre" class="one">
        </div>
    </div>

    <div id="menu"
    <ul>
        <li> <a class="glyphicon glyphicon-home" href="../index.php"> HOME </a></li>

        <li class="dropdown active" ><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> STUDENT </a>
            <div class="dropdown-content">
                <a href="#sModal" data-toggle="modal" data-target="#sModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
                <a href="../forms/student_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
            </div>
        </li>

        <li class="dropdown"><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> STAFF </a>
            <div class="dropdown-content">
                <a href="#mModal" data-toggle="modal" data-target="#mModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
                <a href="../forms/staff_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
            </div>
        </li>


        <li class="dropdown"><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> ADMIN </a>
            <div class="dropdown-content">
                <a href="#aModal" data-toggle="modal" data-target="#aModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
                <a href="../forms/admin_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
            </div>
        </li>
    </ul>
</div>

<div class="modal fade" id="sModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title"> Log-in </h2>
            </div>
            <div class="modal-body">
                <section id="content">
                    <form action="studentloginver.php" method="POST" >
                        <h1> Login here </h1>
                        <div>
                            <input type="text" placeholder="Username" required="" id="username" />
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" id="password" />
                        </div>
                        <div>
                            <input type="submit" value="Log in" />

                        </div>
                        <div style="border-top: 1px solid#888; padding-top:0px; font-size:8%" >
                            <br> <br> <h6>Don't have an account! </h6>
                            <a href="student_signup.php">
                                <h7> <i>Sign Up Here</i></h7> <br>
                            </a>
                        </div>
                    </form><!-- form -->

                </section><!-- content -->
            </div>
        </div>
    </div>
</div><div class="modal fade" id="mModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title"> Log-in </h2>
            </div>
            <div class="modal-body">
                <section id="content">
                    <form action="staffloginver.php" method="POST" >
                        <h1> Login here </h1>
                        <div>
                            <input type="text" placeholder="Username" required="" id="username" />
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" id="password" />
                        </div>
                        <div>
                            <input type="submit" value="Log in" />

                        </div>
                        <div style="border-top: 1px solid#888; padding-top:0px; font-size:8%" >
                            <br> <br> <h6>Don't have an account! </h6>
                            <a href="staff_signup.php">
                                <h7> <i>Sign Up Here</i></h7> <br>
                            </a>
                        </div>
                    </form><!-- form -->

                </section><!-- content -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="aModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title"> Log-in </h2>
            </div>
            <div class="modal-body">
                <section id="content">
                    <form action="adminloginver.php" method="POST" >
                        <h1> Login here </h1>
                        <div>
                            <input type="text" placeholder="Username" required="" id="username" />
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" id="password" />
                        </div>
                        <div>
                            <input type="submit" value="Log in" />

                        </div>
                        <div style="border-top: 1px solid#888; padding-top:0px; font-size:8%" >
                            <br> <br> <h6>Don't have an account! </h6>
                            <a href="admin_signup.php">
                                <h7> <i>Sign Up Here</i></h7> <br>
                            </a>
                        </div>
                    </form><!-- form -->

                </section><!-- content -->
            </div>
        </div>
    </div>
</div>
<br>
<div class="col-lg-12 well" style="background-color: orange;">
    <div class="row">
        <form class="inline"id="form_staff" role="form" action="student_connect.php" method="POST" enctype="multipart/form-data">
            <legend> <h3  align="center"><i> Sign up here as Student! </i> </h3></legend>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 form-group">
                        <label> Upload Your passport size photo here: </label>
                        <input type="file" name="image"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group">
                        <label> First name: </label>
                        <input type="text"class="form-control" name="firstname" placeholder="First name">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label> Last name: </label>
                        <input type="text"class="form-control" name="lastname" placeholder="Last name">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label> Surname: </label>
                        <input type="text"class="form-control" name="surname" placeholder="Surname">
                    </div>
                </div>

                <div class="row">
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

                    <div class="col-sm-4 form-group">
                        <label> Course: </label>
                        <input type="text"class="form-control" name="course" placeholder="Course">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label> Gender: </label>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="gender" value="single" checked required> Male </label>
                            <label class="radio-inline"><input type="radio" name="gender" value="Married" required> Female </label>
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="col-sm-4 form-group">
                        <label> Email: </label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label> Username: </label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label> Password: </label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 form-group">

                        <button type="submit" class="btn  btn-success" name="submit" > Submit </button>
                    </div>
                    <div class="col-sm 2 form-group">
                        <button type="reset" class="btn  btn-warning" name="reset" > Clear </button>
                    </div>
                </div>
                <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                <hr>
                <p>Already have an account? <a href="#sModal" data-toggle="modal" data-target="#sModal"> Sign in </a></p>
            </div>
        </form>
    </div>
</div>
</div>

<?php
include "footer.php";
?>

</body>

</html>