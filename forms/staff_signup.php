<!DOCTYPE html>
<html lang="en">

<head>
    <title> Staff Registration </title>

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
    <img src="../images/18.jpg" indent="centre" class="one">
    </div>
    </div>
  
<div id="menu"
<ul>
<li> <a class="glyphicon glyphicon-home" href="../index.php"> HOME </a></li>
<li><a href="home.php" class="glyphicon glyphicon-globe"> CHILDRENS' HOME </a></li>
<li class="dropdown active"><a class="dropbtn"> STAFF </a>
      <div class="dropdown-content">
         <a href="#mModal" data-toggle="modal" data-target="#mModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
         <a href="staff_signup.php"><span class="glyphicon glyphicon-user"></span> Signup </a>
      </div>
</li>

<li class="dropdown"><a class="dropbtn"> ADOPTER </a>
      <div class="dropdown-content">
         <a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
         <a href="adopter_signup.php"><span class="glyphicon glyphicon-user"></span> Signup </a>
      </div>
</li>

<li class="dropdown"><a class="dropbtn"> About_us </a>
      <div class="dropdown-content">
         <a href="about.php"> About Team </a>
         <a href="contacts.php"><span class="glyphicon glyphicon-phone"></span> Contact Details </a>
      </div>
</li>
</ul>
</div>

  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <div class="modal-body">
            <section>       
                <div id="container_dem" >
                    
                    <a class="hiddenanchor" id="toregiste"></a>
                    <a class="hiddenanchor" id="tologi"></a>
                    <div id="wrappe">
                        <div id="login" class="animate form">
                            <form  action="adopterloginver.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" ><span class="glyphicon glyphicon-user"></span> Your  username: </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username!"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"><span class="glyphicon glyphicon-lock"></span> Your password: </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Enter password here!" /> 
                                </p>
                                <p class="keeplogin"> 
                  <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                  <label for="loginkeeping">Keep me logged in</label>
                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                </p>
                                <p class="change_link">
                  Not a member yet ?
                  <a href="adopter_signup.php" class="to_register">Join us</a>
                </p>
                            </form>
                        </div>

        </div>
      </div>
    </section>
       </div>
    </div>
</div>
</div>
<div class="modal fade" id="mModal">
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
<br>
    <div class="col-lg-12 well" style="background-color: orange;">
	<div class="row">
		<form class="inline"id="form_staff" role="form" action="staff_connect.php" method="POST" enctype="multipart/form-data">
			<legend> <h3  align="center"><i> Sign up here as Staff! </i> </h3></legend>
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
						<label> Gender: </label>
						<select class="form-control" name="gender">
       			 		<option> Male </option>
       			 		<option> Female </option>
     					</select>
     				</div>

     				<div class="col-sm-4 form-group">
						<label> Date of birth: </label>
						<input type="int"class="form-control" name="dob" placeholder="yyyy/mm/dd">
			    	</div>
			
					<div class="col-sm-4 form-group">
						<label> Status: </label>
						<div class="radio">
		    			<label class="radio-inline"><input type="radio" name="status" value="single" checked required> Single </label> 
   						<label class="radio-inline"><input type="radio" name="status" value="Married" required> Married </label>
    					</div>
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
						<label> County: </label>
						<input type="text"class="form-control" name="county" placeholder="County">
					</div>
				</div>
				<div class="row">
			

					<div class="col-sm-4 form-group">
						<label> Home ID: </label>
						<input type="text"class="form-control" name="childrenshomeid" placeholder="Home ID">
					</div>
			
					<div class="col-sm-4 form-group">
						<label> Email: </label>
						<input type="email"class="form-control" name="email" placeholder="Email">
					</div>
			
					<div class="col-sm-4 form-group">
						<label> Username: </label>
						<input type="text"class="form-control" name="username" placeholder="Username">
					</div>
			</div>
			<div class="row">

				<div class="col-sm-4 form-group">
					<label> Password: </label>
					<input type="password" class="form-control" name="pwd" placeholder="Enter Password">
				</div>
					<span class="help-block"> * Should be a combination of uppercase, lowerscase and numbers.</span>
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
                        <p>Already have an account? <a href="#mModal" data-toggle="modal" data-target="#mModal"> Sign in </a></p>
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