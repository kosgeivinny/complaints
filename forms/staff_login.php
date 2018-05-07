<!DOCTYPE html>
<html lang="en">

<head>
    <title> Login </title>

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
<body>
  <div class="container_demo">
  <section id="content">
    <form action="forms/staffloginver.php" method="POST" >
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
                                        <a href="staff_signup.php">
                                            <h7> <i>Sign Up Here</i></h7> <br>
                                        </a>
            </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->

</body>
</html>