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
        $childrenshomeid=$_POST['childrenshomeid'];
        $admno=$_POST['admno'];
        $description=$_POST['description'];
        
        
        if (empty($image) || empty($firstname) || empty($lastname) || empty($childrenshomeid) || empty($admno) || empty($description)) {
            ?>
        <script> alert ('Oops!! cant leave any field blank');
        window.location.assign('staffview.php');
        </script>
        <?php
		}
		else {
            $directory = "Upload/"; //This is the folder which you created just now
             $Path=time().$image;
             $upl=$directory.$image;
            if(move_uploaded_file($_FILES['image']['tmp_name'], $directory. $image)){   
		      $kan = "UPDATE child SET Image='$upl', First_name='$firstname', Last_name='$lastname', Home_ID='$childrenshomeid',Admission_number='$admno',Description='$description' 
                WHERE Admission_number='$admno'";
            }
  
    		if ($conn->query($kan) === TRUE) {
    		?>
       		<script> alert ('Record updated successfully!');
       		 window.location.assign('staffview.php');
        	</script>
       		<?php
			} else {
    		echo "Error updating record: " . $conn->error;
			}
    

  			}

		} 

	?>
</body>
</html>
