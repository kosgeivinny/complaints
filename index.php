<!DOCTYPE html>
<html lang="en">

<head>
    <title> Complaints System </title>

    <meta charset="utf-
    height: 150%;
    width: 320%;8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/style1.css">
    <link href="bootstrap/boot/bootstrapp.css" rel="stylesheet">
    <link href="bootstrap/boot/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/boot/agency.min.css" rel="stylesheet">




</head>

<body style="background-image:url(images/main.jpg);">

<div class="container">
    <br>
    <div>
    <div id="upmenu">
    <img src="images/header.jpg" indent="centre" class="one">
    </div>
    </div>
  
<div id="menu"
<ul>
<li class="active" > <a class="glyphicon glyphicon-home" href="index.php"> HOME </a></li>

<li class="dropdown"><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> STUDENT </a>
      <div class="dropdown-content">
         <a href="#sModal" data-toggle="modal" data-target="#sModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
         <a href="forms/student_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
      </div>
</li>

    <li class="dropdown"><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> STAFF </a>
        <div class="dropdown-content">
            <a href="#mModal" data-toggle="modal" data-target="#mModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
            <a href="forms/staff_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
        </div>
    </li>


    <li class="dropdown"><a class="dropbtn"><span class="glyphicon glyphicon-user"></span> ADMIN </a>
        <div class="dropdown-content">
            <a href="#aModal" data-toggle="modal" data-target="#aModal"><span class="glyphicon glyphicon-log-in"></span> Login </a>
            <a href="forms/admin_signup.php"> <span class="glyphicon glyphicon-user"></span> Signup </a>
        </div>
    </li>
</ul>
</div>

  <br>
  <div class="container" style="background-color:lightcyan;">
      <div class="paragraph" style="text-align:center;"><strong><font size="4" color="#2a2a2a"style='background-color:lightcyan;'>
                  <p>  Complain management system that aids to provide the following services :</p></font></strong>
<ul style="text-align:left"><li><font color="#c2743b"> Improve the University complain launching process through online process</font></li>
    <li><font color="#c2743b">Enhance tracking of complaints online</font><br></li>
    <li><font color="#c2743b">Provide timely feedback to complaints</font></li></ul>
</p>
</div>
</div>
 <div class="row">
     <br>
     <br>
     <p> </p>
 </div>
  <div class="modal fade" id="sModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <div class="modal-body">
          <?php 
          include "forms/student_login.php";
          ?>
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
          <?php 
          include "forms/staff_login.php";
          ?>
       </div>
    </div>
</div>
</div>

<div class="modal fade" id="aModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="modal-title"> Log in </h2>
        </div>
        <div class="modal-body">
          <?php 
          include "forms/admin_login.php";
          ?>
       </div>
    </div>
</div>


<div><div style="height: 10px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;">
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>

<div class="paragraph" style="text-align:center; background-color:lightcyan;"><font size="" color="#3366ff"><strong><em>Welcome&nbsp;</em><br>Jeremiah 29:11&nbsp;</strong></font></div>

<div><div style="height: 0px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;">
<div style="height: 0px; overflow: hidden; width: 100%;"></div></div>
</div>
</div>
</div>


</div>

<?php
include "forms/footer.php";
?>

</body>
</html>