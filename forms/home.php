<!DOCTYPE html>
<html lang="en">

<head>
    <title> Childrens' Home </title>

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
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"> Adoption System </a>
    </div>
    <ol>
     
      <form method="POST" action="viewver.php"> <input type="submit" name="view" class="btn btn-warning" value="View"> <input type="button" class="btn btn-info " value="Donate"> <input type="button" class="btn btn-danger " value="Sponsor"> </form>
      
    </ol>
  </div>
</nav>
</div>

</div>
<?php
include "footer.php";
?>
</body>

</html>
