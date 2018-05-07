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
<?php
include "../connect/connect.php";
if (isset($_POST["submit"]))
{
    $firstname=$_POST['firstname'];
    $course=$_POST['course'];
    $department=$_POST['department'];
    $complain=$_POST['complain'];
    $response=$_POST['response'];


    if (empty($firstname) || empty($course) || empty($department) || empty($complain) || empty($response)) {
        ?>
        <script> alert ('Oops!! cant leave any field blank');
            window.location.assign('students_complains.php');
        </script>
    <?php
    }
    else {

    $spon="INSERT INTO student_response (First_name, Course, Department, Complain, Response) VALUES ('$firstname','$course','$department','$complain','$response')";
    $re=mysqli_query($conn,$spon);
    if(!$re)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
    $kun = "DELETE FROM student_complain WHERE First_name='$firstname'";

    if ($conn->query($kun) === TRUE) {
    ?>
        <script> alert ('Response received, Thank you!!');
            window.location.assign('students_complains.php');
        </script>
        <?php
    }
    else {
        echo "Error posting your response: " . $conn->error;
    }

    }


    }

}

?>
</body>
</html>
