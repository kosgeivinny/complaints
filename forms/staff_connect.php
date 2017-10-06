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
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$status=$_POST['status'];
		$nationalid=$_POST['nationalid'];
		$phonenumber=$_POST['phonenumber'];
		$county=$_POST['county'];
		$childrenshomeid=$_POST['childrenshomeid'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$encypass=md5($password);
		
		if (empty($dob) || empty($status) || empty($nationalid) || empty($phonenumber) || empty($county) || empty($childrenshomeid) || empty($email) || empty($username) || empty($password)) {
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
		$sql="INSERT INTO staff(Image,First_name,Last_name,Surname,Gender,Date_of_Birth,Status,ID_NO,Phone_number,County,Home_ID,Email,Username,Password)".
		 "VALUES('$upl','$firstname','$lastname','$surname','$gender','$dob','$status','$nationalid','$phonenumber',
		'$county','$childrenshomeid','$email','$username','$password')";
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
