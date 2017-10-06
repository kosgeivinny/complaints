<!DOCTYPE html>
<html lang="en">

<head>
    <title> Sponsor </title>

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

<body style="background-image:url(../images/bg.jpg);">
	<?php
	include "header.php";
	?>
	<?php

include ('../connect/connect.php');
	$adm_no=$_REQUEST['adm_no'];
	$sql= "SELECT * FROM child WHERE Admission_number = '$adm_no'";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1){
            while($row=mysqli_fetch_assoc($result)){
       	$firstname=$row['First_name'];
		$lastname=$row['Last_name'];
		$homeid=$row['Home_ID'];
		}
	}

   $adm_no=$_REQUEST['adm_no'];
    $spl="SELECT * FROM confirmedadopted WHERE confirmedadopted.Admission_number='$adm_no'";
    $res=mysqli_query($conn,$spl);
    $numrow=mysqli_num_rows($res);
        if($numrow==1){
            while($row=mysqli_fetch_assoc($res)){
        
            $aid=$row['Admission_number'];
        
        }
    }
    
   if (empty($aid)){
echo "";
   }
   else {
    if (($adm_no)>=($aid)) {

            ?>
        <script> alert ('Sorry the Child is already Adopted! Select another Please!');
        window.location.assign('adopt.php');
        </script>
        <?php
        }
    }
?>




<div class="container">
	<br>
	<div class="col-lg-9 well">
	<div class="row">
		<form class="inline" role="form" action="adopter_connect.php" method="POST">
			<legend> <b> Register here to adopt!</b> <a href="../forms/adopt.php" class="btn btn-danger right" role="button" valign="right"><span class="glyphicon glyphicon-off"></span> close </a> </legend>
			<div class="col-sm-12">
            	<div class="row">
            		<div class="col-sm-6 form-group">


            			<label><br><h4> <b>Child Details</b> </h4></label>
            			
            		</div>
            	</div>
            	<div class="row">
					<div class="col-sm-4 form-group">
						<label> First name: </label>
						<input type="text"class="form-control" name="sfirst" placeholder="First name" value="<?php echo $firstname ?>">
					</div>
						
					<div class="col-sm-4 form-group">
						<label> Last name: </label>
						<input type="text"class="form-control" name="slast" placeholder="Last name" value="<?php echo $lastname ?>">
					</div>
		
				</div>

			
				<div class="row">
					<div class="col-sm-4 form-group">
						<label> Home ID: </label>
						<input type="text"class="form-control" name="childrenshomeid" placeholder="Home ID" value="<?php echo $homeid ?>">
					</div>
					
					<div class="col-sm-4 form-group">
						<label> Adm no: </label>
						<input type="int" class="form-control" name="admno" placeholder="Admission number" value="<?php echo $adm_no ?>">
					</div>
					
				</div>
				<div class="row">
			
					<div class="col-sm-8 form-group">
						<label> <h4><b>Adopter's Details</b></h4> </label>
						
					</div>
				</div>

			<div class="row">
                            <div class="col-sm-4 form-group">
                                <label> First Name: </label>
                                <input type="text" name="firstname" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Last Name: </label>
                                <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Surname: </label>
                                <input type="text" name="surname" placeholder="Enter Surname" class="form-control">
                            </div>
                        </div>                  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label> Gender: </label>
                                <div class="radio">
                                <label class="radio-inline"><input type="radio" name="gender" value="male" checked required> Male </label>
                                <label class="radio-inline"><input type="radio" name="gender" value="female" required> Female </label>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Age: </label>
                                <input type="int"class="form-control" name="age" placeholder="Age">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label> Status: </label>
                                 <select class="form-control" name="status">
                                 <option> Single </option>
                                 <option> Married </option>
                                 </select>
                            </div>      
                        </div>
                        <div class="row">
                             <div class="col-sm-4 form-group">
                                <label> Date of Birth: </label>
                                <input type="int" name="dob" placeholder="yyyy/mm/dd" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label> Id number: </label>
                                <input type="int" class="form-control" name="nationalid" placeholder="National ID">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Occupation: </label>
                                <input type="text"class="form-control" name="occupation" placeholder="Occupation">
                            </div>
                            
                        </div>
                        <div class="row">                    
                            <div class="col-sm-4 form-group">
                              <label> Country: </label>
                                <input type="text"class="form-control" name="country" placeholder="Country">  
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Phone number: </label>
                                <input type="int" class="form-control" name="phonenumber" placeholder="Phone number">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Email: </label>
                                <input type="email"class="form-control" name="email" placeholder="Email">
                            </div>
                            
                            
                        </div>  
                       
                        <div class="row">  
                        <div class="col-sm-4 form-group">
                                <label> Residence Address: </label>
                                <input type="int"class="form-control" name="residenceadd"placeholder="Address">
                            </div>                  
                            
                            <div class="col-sm-4 form-group">
                                <label> No. of Adopted Children: </label>
                                <input type="int"class="form-control" name="adoptedno">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label> Sponsored children: </label>
                                <input type="int"class="form-control" name="sponsored">
                            </div>
                        </div>  
					
			<div class="row">
					<div class="col-sm-4 form-group">
                                <label> No. of Biological Children: </label>
                                <input type="int"class="form-control" name="biologicalno">
                            </div>	
            </div>
            <div class="row">
				<div class="col-sm-2 form-group">
				
					<button type="submit" class="btn btn-success" name="submit" ><span class="glyphicon glyphicon-plus-sign"></span> Submit </button>
				</div>
				<div class="col-sm-2 form-group">
					<button type="reset" class="btn btn-warning" name="reset" ><span class="glyphicon glyphicon-minus-sign"> Reset </button>
				</div>
			</div>
			
		</div>
		</form>
	</div>
</div>
</div>
</body>
</html>