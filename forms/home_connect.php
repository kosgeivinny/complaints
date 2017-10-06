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
		$year=$_POST['year'];
		$name=$_POST['name'];
		$childrenshomeid=$_POST['childrenshomeid'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$account=$_POST['account'];
		$telephone=$_POST['telephone'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		
		if (empty($name) || empty($year) || empty($country) || empty($city) || empty($address) || empty($telephone) || empty($childrenshomeid) || empty($email)) {
			?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('../index.php');
        </script>
        <?php
		}
		else {
			 $directory = "Upload/"; //This is the folder which you created just now
 			 $Path=time().$image;
 			 $upl=$directory.$image;
  			if(move_uploaded_file($_FILES['image']['tmp_name'], $directory. $image)){  
		$sql="INSERT INTO home(Logo,Year, Name, Home_ID, Country, City, Account, Telephone, Address, Email)".
		 "VALUES('$upl','$year','$name','$childrenshomeid','$country','$city','$account','$telephone','$address','$email')";
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
        window.location.assign('staff_signup.php');
        </script>
        <?php
		}
		}
	
	} 

	?>
</body>
</html>