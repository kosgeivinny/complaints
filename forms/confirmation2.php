<?php

include ('../connect/connect.php');
	$adm_no=$_REQUEST['adm_no'];
	
    


	$sql= "SELECT * FROM adopter WHERE Admission_number = '$adm_no'";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1){
            while($row=mysqli_fetch_assoc($result)){
       	$firstname=$row['SFirstname'];
		$lastname=$row['SLastname'];
		$homeid=$row['Home_ID'];
		$adm_no=$row['Admission_number'];
		$sfname=$row['First_name'];
		$slastame=$row['Last_name'];
		$gender=$row['Gender'];
		$id=$row['ID_NO'];
		$occupation=$row['Occupation'];
		$country=$row['Country'];
		$phone=$row['Phone_number'];
		$email=$row['Email'];
		$address=$row['Residence_Add'];
		$bio=$row['Biological_no'];
		$adopt=$row['Adopted_no'];
		$spons=$row['Sponsored_no'];
		
		$spon="INSERT INTO confirmedadopted (First_name, Last_name, Home_ID, Admission_number, Firstname, Lastname, Gender, ID, Occupation, Country, Phone, Email, Address, Biological, Adopted, Sponsored) VALUES ('$firstname','$lastname','$homeid','$adm_no','$sfname','$slastame','$gender','$id','$occupation','$country','$phone','$email','$address','$bio','$adopt','$spons')";
		$re=mysqli_query($conn,$spon);
		if(!$re)
		{
			die("Query Failed! " . mysqli_error($conn));
		}
		else
		{
			$kun = "DELETE FROM adopter WHERE Admission_number='$adm_no'";
  
    		 if ($conn->query($kun) === TRUE) {
			 ?>
       		 <script> alert ('Successfuly confirmed!!');
       		 window.location.assign('adopted.php');
        	 </script>
        	 <?php
			 }
			 else {
    		 echo "Error confirming Adoption: " . $conn->error;
			}

		}
	 }
	} 
	
	?>
		