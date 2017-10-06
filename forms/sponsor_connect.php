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
		$sfirstname=$_POST['sfirst'];
		$slastname=$_POST['slast'];
		$childrenshomeid=$_POST['childrenshomeid'];
		$adm=$_POST['admno'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$surname=$_POST['surname'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$status=$_POST['status'];
		$nationalid=$_POST['nationalid'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$address=$_POST['residenceadd'];
		$occupation=$_POST['occupation'];
		$duration=$_POST['duration'];
		
		if (empty($firstname) || empty($lastname) || empty($nationalid) || empty($phonenumber) || empty($country) || empty($childrenshomeid) || empty($email) || empty($status) || empty($age)) {
			?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('../forms/sponsor.php');
        </script>
        <?php
		}
		else {
			
		$sql="INSERT INTO sponsor(SFirstname,SLastname,Home_ID,Admission_number,Firstname,Lastname,Surname,Gender,Age,Status,ID,Phone,Email,Country,Address,Occupation,Duration)".
		 "VALUES('$sfirstname','$slastname','$childrenshomeid','$adm','$firstname','$lastname','$surname','$gender','$age',
		'$status','$nationalid','$phonenumber','$email','$country','$address','$occupation','$duration')";
		
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
		?>
        <script> alert ('Sponsorship successfful wait for confirmation on email!');
        window.location.assign('../forms/sponsor.php');
        </script>
        <?php
		}
		}
	
	} 

	?>
</body>
</html>
