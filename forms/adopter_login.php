<!DOCTYPE html>
<html lang="en">
<head>
  <title> Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/style.css">
<link rel="stylesheet" href="../bootstrap/css/style1.css">
</head>
<body>
        <div class="container">
           
            <section>       
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="forms/adopterloginver.php" method="POST" autocomplete="on"> 
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
                  <input type="checkbox" name="login" id="loginkeeping" value="loginkeeping" /> 
                  <label for="loginkeeping">Keep me logged in</label>
                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
                </p>
                                <p class="change_link">
                  Not a member yet ?
                  <a href="forms/adopter_signup.php" class="to_register">Join us</a>
                </p>
                            </form>
                        </div>

        </div>
      </div>
    </section>
    </div>
    </body>
    </html>
