
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Header </title>

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
  
<div id="menu">
<ul>
<li> <a class="glyphicon glyphicon-home" href="../index.php"> HOME </a></li>
<li class="dropdown"> <a class="dropbtn glyphicon glyphicon-globe" href="../forms/viewver.php"> CHILDRENS' HOME </a>
      <div class="dropdown-content">
         <a href="../forms/viewver.php"> View </a>
         <a href="../forms/proc.pdf"> Adopt </a>
         <a href="../forms/sponsor.php">  Sponsor </a>

      </div>
</li>
<li class="dropdown"><a class="dropbtn"> STAFF </a>
      <div class="dropdown-content">
         <a href="#mModal" data-toggle="modal" data-target="#mModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
         <a href="#yModal" data-toggle="modal" data-target="#yModal"><span class="glyphicon glyphicon-user"></span> Signup </a>
      </div>
</li>

<li class="dropdown"><a class="dropbtn"> ADOPTION </a>
      <div class="dropdown-content">
         <a href="adoptionprocedure.php"> Adoption Procedure </a>
         <a href="viewver.php"><span class="glyphicon glyphicon-log-in"></span> View </a>
         <a href="adopt.php"><span class="glyphicon glyphicon-user"></span> Adopt  </a>
      </div>
</li>
<li> <a href="sponsor.php"> SPONSOR </a></li>

<li> <a href="donate.php"> DONATE </a></li>

<li class="dropdown"><a class="dropbtn"> ABOUT US </a>
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
         <form action="../forms/staffloginver.php" method="POST" >
         <h1> Login here </h1>
         <div>
        <input type="text" placeholder="Username" required="" id="username" name="username"/>
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" name="password"/>
      </div>
      <div>
        <input type="submit" name="login" value="Log in" />
        
      </div>
      <div style="border-top: 1px solid#888; padding-top:0px; font-size:8%" >
                                            <br> <br> <h6>Don't have an account! </h6>
                                        <a href="#yModal" data-toggle="modal" data-target="#yModal">
                                            <h7> <i>Sign Up Here</i></h7> <br>
                                        </a>
            </div>
    </form><!-- form -->
    
  </section><!-- content -->
       </div>
    </div>
</div>
</div>


<div class="modal fade" id="yModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="modal-title"> Sign up </h2>
        </div>
        <div class="modal-body">
          <section>
          <div id="wra">
          <div class="col-lg-8 well" style="background-color: black;">
          <div class="row">
          <form class="inline"id="form_staff" role="form" action="home_connect.php" method="POST" enctype="multipart/form-data">
          <h5 style="color:red" align="center"> <b> You need to register the organisation/childrens' home you work with first!! </b> </h5>
          <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label> Home Photo: </label>
                  <input type="file" name="image" />
                </div>
                <div class="col-sm-6 form-group">
            <label> Year Founded: </label>
            <input type="int"class="form-control" name="year" placeholder="Year Established">
          </div>
              </div>
              <div class="row">
          <div class="col-sm-6 form-group">
            <label> Home Name: </label>
            <input type="text"class="form-control" name="name" placeholder="Home name">
          </div>
          <div class="col-sm-6 form-group">
            <label> Home ID: </label>
            <input type="text"class="form-control" name="childrenshomeid" placeholder="Home ID">
          </div>
            
          
    
        </div>
      
        <div class="row">
          <div class="col-sm-6 form-group">
            <label> Country: </label>
            <input type="text" class="form-control" name="country" placeholder="Country">
            </div>

            <div class="col-sm-6 form-group">
            <label> City/State </label>
            <input type="text"class="form-control" name="city" placeholder="City/State">
            </div>
      
          </div>
          <div class="row">
        
          <div class="col-sm-6 form-group">
            <label> Bank Account(s): </label>
            <input type="text" class="form-control" name="account" placeholder="Bank Account(s)">
          </div>
          <div class="col-sm-6 form-group">
            <label> Telephone: </label>
            <input type="int" class="form-control" name="telephone" placeholder="Telephone number">
          </div>
          
        </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <label> Postal Code/Address: </label>
            <input type="text" class="form-control" name="address" placeholder="Postal Address">
          </div>
        

          
          <div class="col-sm-6 form-group">
            <label> Email Address: </label>
            <input type="email"class="form-control" name="email" placeholder="Email Address">
          </div>
      
          
      </div>
            
            <div class="row">
        <div class="col-sm-4 form-group">
        
          <button type="submit" class="btn btn-success" name="submit" ><span class="glyphicon glyphicon-plus-sign"></span> Proceed </button>
        </div>
        <div class="col-sm-3 form-group">
          <button type="reset" class="btn btn-warning" name="reset" ><span class="glyphicon glyphicon-minus-sign"></span> Reset </button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
</section>
       </div>
    </div>
</div>
</div>
</div>
</body>
</html>