<!DOCTYPE html>
<html lang="en">

<head>
    <title> Donate </title>

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
    <?php
    include "header.php";
    ?>
        <div class="container">
<br>
<legend><h5 class="paragraph" style="text-align:center; background-color:;"><font size="" color="black"><strong><em>Below is a list of Registered Children's Home with their Details!</em></strong></font></h5>
</legend>
   <?php

include "../connect/connect.php";

    
    $rus = "SELECT Name,City,Account, Telephone, Address, Email FROM home";
    $sur = $conn->Query($rus);
     
    echo "<table class='table table-striped table-inverse' cellspacing='15px' border='0px'>
    <thead> 
    <tr style='background-color:red;'><th>Name</th><th>City</th><th>Bank Account</th><th>Telephone</th><th>Address</th><th>Email</th></tr></thead>";
    
    while($row =mysqli_fetch_assoc($sur)) {
        echo "<tr><td>". $row["Name"] . "</td><td>". $row["City"] . "</td><td>". $row["Account"]."</td><td>".$row["Telephone"]."</td><td>".$row["Address"]."</td><td>".$row["Email"]."</td></tr>";
    }
    echo "</table>";
      
      mysqli_free_result($sur);
   
    ?>
    <div class="paragraph" style="text-align:center; background-color:pink;"><font size="" color="#3366ff"><strong><em>"In case of material donations, contact the institution/children's home using the above mail or phone number!</em></strong></font></div>
</div>
<?php
include "footer.php";
?>
</body>
</html>