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
		$image=$_FILES["image"]["name"]; 
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$surname=$_POST['surname'];
		$department=$_POST['department'];
		$job=$_POST['job'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$encypass=md5($password);
		
		if (empty($firstname) || empty($lastname) || empty($surname) || empty($gender) || empty($job) || empty($department) || empty($email) || empty($username) || empty($password)) {
			?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('staff_signup.php');
        </script>
        <?php
		}
		else {
			$directory = "Upload/"; //This is the folder which you created just now
 			 $Path=time().$image;
 			 $upl=$directory.$image;
  			if(move_uploaded_file($_FILES['image']['tmp_name'], $directory. $image)){  
		$sql="INSERT INTO staff(Image,First_name,Last_name,Surname,Department,Job_title,Gender,Email,Username,Password)".
		 "VALUES('$upl','$firstname','$lastname','$surname','$department','$job','$gender','$email','$username','$password')";
		}
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
		?>
        <script> alert ('Successfuly registered!');
        window.location.assign('../index.php');
        </script>
        <?php
		}
		}
	
	} 

	?>
</body>
</html>
