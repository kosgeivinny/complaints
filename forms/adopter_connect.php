<!Doctype html>
<head> 
	<title> Validation 2 </title>
</head>
<body>
<?php
 include "../connect/connect.php";
if (isset($_POST["submit"]))
{
		$sfirstname=$_POST['sfirst'];
		$slastname=$_POST['slast'];
		$homeid=$_POST['childrenshomeid'];
		$adm_no=$_POST['admno'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$surname=$_POST['surname'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$status=$_POST['status'];
		$dob=$_POST['dob'];
		$nationalid=$_POST['nationalid'];
		$occupation=$_POST['occupation'];
		$country=$_POST['country'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$residadd=$_POST['residenceadd'];
		$adoptedno=$_POST['adoptedno'];
		$sponsoredno=$_POST['sponsored'];
		$biologicalno=$_POST['biologicalno'];
		if (($age)>=65) {

			?>
        <script> alert ('Oops!! cannot Adopt go throught the Adoption Procedure for further explanations');
        window.location.assign('adopt.php');
        </script>
        <?php
		}
		else {
		
		if (empty($dob) || empty($status) || empty($nationalid) || empty($phonenumber) || empty($country) || empty($firstname) || empty($email) || empty($lastname) || empty($biologicalno)) {
			?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('adopt.php');
        </script>
        <?php
		}
		else {
			
		
		$sq="INSERT INTO adopter(SFirstname,SLastname,Home_ID,Admission_number,First_name,Last_name,Surname,Gender,Age, Status, Date_of_Birth, ID_NO, Occupation, Country, Phone_number, Email, Residence_Add,  Adopted_no, Sponsored_no, Biological_no) 
			VALUES('$sfirstname','$slastname','$homeid','$adm_no','$firstname','$lastname','$surname','$gender','$age','$status','$dob','$nationalid','$occupation',
			'$country','$phonenumber','$email', '$residadd', '$adoptedno', '$sponsoredno', '$biologicalno')";
			
		$re=mysqli_query($conn,$sq);
		if(!$re)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
		?>
        <script> alert ('Successfuly adopted. Wait for confirmation on email/phone!!');
        window.location.assign('adopt.php');
        </script>
        <?php
		}
		}
	}
	} 

	?>
</body>
</html>
