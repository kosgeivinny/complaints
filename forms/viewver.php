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
 <body>
  <div class="container">
<?php
include "header.php";
?>

  <br>
  <div class="container" >
    <div class="container">

<?php
include "../connect/connect.php";
    
    $rus = "SELECT Image,First_name,Last_name,Home_ID,Admission_number,Description FROM child";
    $sur = $conn->Query($rus);
     
    echo "<table class='table table-bordered' cellspacing='15px' border='0px' style='background-color:lightcyan;'>
    <thead> 
    <tr style='background-color:blue;'><th>Profile Photo</th><th>First Name</th><th>Last Name</th><th>Home_ID</th><th>Admission Number</th><th>Description</th><th>Action</th></tr></thead>";
    
    while($row =mysqli_fetch_assoc($sur)) {
      $ig=$row['Image'];
      $gi="<img src=".$ig." style='width:150px;height:150px;''>  <br>";
        echo "<tr><td> $gi </td><td>". $row["First_name"] . "</td><td>". $row["Last_name"]."</td><td>".$row["Home_ID"]."</td><td>".$row["Admission_number"]."</td><td>".$row["Description"]."</td>";
        echo "<td><a href='sponsorf.php? adm_no=".$row['Admission_number']."'>
        <button class=\"btn btn-warning btn-xs\"><span class=\"glyphicon glyphicon-edit\">Sponsor</span></button>
        </a>
        <a href='adoptf.php? adm_no=".$row['Admission_number']."'><br><br>
        <button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-delete\">Adopt</span></button></a></td></tr>";

    }
    echo "</table>";
      
         
    ?>
</div>
</div>
</div>

<?php
include "footer.php";
?>
</body>
</html>
    