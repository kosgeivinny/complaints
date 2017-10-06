<?php

include ('../connect/connect.php');
	$adm_no=$_REQUEST['adm_no'];
	
    


	$sql= "SELECT * FROM sponsor WHERE Admission_number = '$adm_no'";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1){
            while($row=mysqli_fetch_assoc($result)){
       	$firstname=$row['SFirstname'];
		$lastname=$row['SLastname'];
		$homeid=$row['Home_ID'];
		$adm_no=$row['Admission_number'];
		$sfname=$row['Firstname'];
		$ssname=$row['Lastname'];
		$surname=$row['Surname'];
		$gender=$row['Gender'];
		$id=$row['ID'];
		$phone=$row['Phone'];
		$email=$row['Email'];
		$country=$row['Country'];
		$address=$row['Address'];
		$occupation=$row['Occupation'];
		$duration=$row['Duration'];
		
		$spon="INSERT INTO confirmedspo (First_name, Last_name, Home_ID, Admission_number,Firstname,Lastname,Surname,Gender,ID,Phone,Email,Country,Address,Occupation,Duration) VALUES ('$firstname','$lastname','$homeid','$adm_no','$sfname','$ssname','surname','$gender','$id','$phone','$email','$country','$address','$occupation','$duration')";
		$re=mysqli_query($conn,$spon);
		if(!$re)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
			$kun = "DELETE FROM sponsor WHERE Admission_number='$adm_no'";
  
    		 if ($conn->query($kun) === TRUE) {
			 ?>
       		 <script> alert ('Successfuly confirmed!!');
       		 window.location.assign('sponsored.php');
        	 </script>
        	 <?php
			 }
			 else {
    		 echo "Error confirming sponsorship: " . $conn->error;
			}

		}
	 }
	} 
	
	?>
		