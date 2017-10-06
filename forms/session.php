<?php
include "../connect/connect.php";

session_start();
          
      $rus = "SELECT Image,First_name,Last_name,Home_ID,Admission_number,Description FROM child";
    $sur = $conn->Query($rus);
     
    echo "<table class='table' cellspacing='15px' border='1px'>
    <thead> 
    <tr><th>Profile Photo</th><th>First Name</th><th>Last Name</th><th>Home_ID</th><th>Admission Number</th><th>Description</th></tr></thead></table";
    
    while($row =mysqli_fetch_assoc($sur)) {
        echo "<tr><td>". $row["Image"] . "</td><td>". $row["First_name"] . "</td><td>". $row["Last_name"]."</td><td>".$row["Home_ID"]."</td><td>".$row["Admission_number"]."</td><td>".$row["Description"]."</td></tr>";
    }
    echo "</table>";
?>