<!DOCTYPE html>
<html lang="en">

<head>
    <title> Adopter Signup </title>

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
<?php
include "header.php";
?>
<br>
<div class="container">
    <h3 class="well" style="background-color: lime;" align="center"> <b> Adopter Registration Form </b></h3>
    <div class="col-lg-12 well" style="background-color: pink;">
    <div class="row">
                    <form method="POST" action="adopter_connect.php" enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                              <label> Upload Your passport size photo here: </label>
                              <input type="file" name="image"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label> First Name: </label>
                                <input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Last Name: </label>
                                <input type="text" name="lastname" placeholder="Enter Last Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Surname: </label>
                                <input type="text" name="surname" placeholder="Enter Surname Here.." class="form-control">
                            </div>
                        </div>                  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label> Gender: </label>
                                <div class="radio">
                                <label class="radio-inline"><input type="radio" name="gender" value="male" checked required> Male </label>
                                <label class="radio-inline"><input type="radio" name="gender" value="female" required> Female </label>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Date of Birth: </label>
                                <input type="int" name="dob" placeholder="yyyy/mm/dd" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label> Status: </label>
                                 <select class="form-control" name="status">
                                 <option> Single </option>
                                 <option> Married </option>
                                 <option> Widow </option>
                                 <option> Divorcee </option>
                                </select>
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label> Id number: </label>
                                <input type="int" class="form-control" name="nationalid" placeholder="National ID">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Phone number: </label>
                                <input type="int" class="form-control" name="phonenumber" placeholder="Phone number">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Country: </label>
                                <input type="text"class="form-control" name="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="row">                    
                            <div class="col-sm-4 form-group">
                                <label> Age: </label>
                                <input type="int"class="form-control" name="age" placeholder="Age">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Residence Address: </label>
                                <input type="int"class="form-control" name="residenceadd"placeholder="Address">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Occupation: </label>
                                <input type="text"class="form-control" name="occupation" placeholder="Occupation">
                            </div>
                        </div>  
                        <div class="row">                    
                            <div class="col-sm-4 form-group">
                                <label> No. of Biological Children: </label>
                                <input type="int"class="form-control" name="biologicalno">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> No. of Adopted Children: </label>
                                <input type="int"class="form-control" name="adoptedno">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Total: </label>
                                <input type="int"class="form-control" name="total">
                            </div>
                        </div>  
                        <div class="row">                    
                            <div class="col-sm-4 form-group">
                                <label> Email: </label>
                                <input type="email"class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Username: </label>
                                <input type="text"class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Password: </label>
                                <input type="password" class="form-control" name="pwd" placeholder="Enter Password">
                                <span class="help-block"> * Should be a combination of uppercase, lowerscase and numbers.</span>

                            </div>
                        </div>
                     
            <div class="row">
                <div class="col-sm-2 form-group">
                
                    <button type="submit" class="btn  btn-success" name="submit" > Submit </button>
                </div>
                <div class="col-sm-2 form-group">
                    <button type="reset" class="btn  btn-warning" name="reset" > Clear </button>
                </div>
            </div>
            <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                        <hr>
                        <p>Already have an account? <a href="#myModal" data-toggle="modal" data-target="#myModal"> Sign in </a></p>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<?php
include "footer.php";
?>

</body>

</html>