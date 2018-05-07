<!Doctype html>
<head>
    <title> Validation </title>
</head>
<body>
<?php
include "../connect/connect.php";
if (isset($_POST["submit"]))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $job=$_POST['job'];
    $department=$_POST['department'];
    $complain=$_POST['complain'];


    if (empty($firstname) || empty($lastname) || empty($job) || empty($department)) {
        ?>
        <script> alert ('Oops!! cant leave any field blank');
            window.location.assign('staff_complain.php');
        </script>
    <?php
    }
    else {

    $QueryInsertFile="INSERT INTO staff_complain(First_name, Last_name, Job_title, Department, Complain) VALUES ('$firstname','$lastname','$job','$department','$complain' )";
    $wery=mysqli_query($conn,$QueryInsertFile);


    if(!$wery)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
    ?>
        <script> alert ('Successfuly posted!');
            window.location.assign('staff.php');
        </script>
        <?php
    }
    }

}

?>
</body>
</html>
