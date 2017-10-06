<!Doctype html>
<head> 
	<title> Validation </title>
</head>
<body>
<?php
 include "../connect/connect.php";
if (isset($_POST["submit"]))
{
		$image=$_FILES["image"]["name"]; 
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$childrenshomeid=$_POST['childrenshomeid'];
		$admno=$_POST['admno'];
		$description=$_POST['description'];
		
		
		if (empty($image) || empty($firstname) || empty($lastname) || empty($childrenshomeid) || empty($admno) || empty($description)) {
			?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('child_signup.php');
        </script>
        <?php
		}
		else {
			$directory = "Upload/"; //This is the folder which you created just now
 			 $Path=time().$image;
 			 $upl=$directory.$image;
  			if(move_uploaded_file($_FILES['image']['tmp_name'], $directory. $image)){    
   			 $QueryInsertFile="INSERT INTO child(Image, First_name, Last_name, Home_ID, Admission_number, Description) VALUES ('$upl', '$firstname','$lastname','$childrenshomeid','$admno','$description' )";
   			 $wery=mysqli_query($conn,$QueryInsertFile);
   			 } 
		
		if(!$wery)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
		?>
        <script> alert ('Successfuly registered!');
        window.location.assign('stafff.php');
        </script>
        <?php
		}
		}
	
	} 

	?>
</body>
</html>
