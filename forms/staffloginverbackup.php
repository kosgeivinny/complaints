<!DOCTYPE html>
<html lang="en">

<head>
    <title> Verification </title>

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

<?php


if (isset($_POST['login'])){
mysqli_connect('localhost','root','59156254654','adoption') or die(mysqli_error());
    $username=$_POST['username'];
  $password=$_POST['password']; 
  if($name!=''&& $pwd!='')
  {
    $query=mysqli_query("SELECT * from staff where Username='".$username."' and Password='".$password."' ") or die(mysqli_error());
      
    $rows=mysqli_num_rows($query);
     
        
      
    if($rows == 1){   
        while($row=mysqli_fetch_array($query)){
     $_SESSION['login_user']=$name;
         $_SESSION['Name']=$row['Fisrt_Name'];
         $_SESSION['Photo']=$row['Image'];
       
           }
       
        }
                     header('location:staff.php');

    }

  }
?>
        
      
         