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
    $course=$_POST['course'];
    $department=$_POST['department'];
    $complain=$_POST['complain'];


    if (empty($firstname) || empty($lastname) || empty($course) || empty($department)) {
        ?>
        <script> alert ('Oops!! cant leave any field blank');
            window.location.assign('student_complain.php');
        </script>
    <?php
    }
    else {

        $QueryInsertFile="INSERT INTO student_complain(First_name, Last_name, Course, Department, Complain) VALUES ('$firstname','$lastname','$course','$department','$complain' )";
        $wery=mysqli_query($conn,$QueryInsertFile);


    if(!$wery)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
    ?>
        <script> alert ('Successfuly posted!');
            window.location.assign('student.php');
        </script>
        <?php
    }
    }

}

?>
</body>
</html>
