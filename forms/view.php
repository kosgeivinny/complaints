<?php
include "../connect/connect.php";
$sqlimage = "SELECT Image FROM child";
$imageresult1 = mysqli_query($sqlimage);

while($rows = mysqli_fetch_assoc($imageresult1))
{       
    $image = $rows['image'];    
    print $image;
}
?>
<!Doctype html>
<html lang="eng">
<head>
    <title> View </title>
    <meta charset="utf-
    height: 150%;
    width: 320%;8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../bootstrap/css/custom.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 </head>
<?php
session_start();
include "../connect/connect.php";
if (isset($_POST["view"]))
	{
    
    $query = “select Image from child”;
	$stmt = $con->prepare( $query );
	//bind the id of the image you want to select
	$stmt->bindParam(1, $_GET['id']);
	$stmt->execute();
	//to verify if a record is found
	$num = $stmt->rowCount();
	if( $num ){
    //if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //specify header with content type,
    //you can do header(“Content-type: image/jpg”); for jpg,
    //header(“Content-type: image/gif”); for gif, etc.
    header(“Content-type: image/png”);
    
    //display the image data
    print $row['data'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
}
    }

    ?>
    <html>
    <title></title>
    <body>
      <a href="view registered here?"></a>
    </body>
    </html>
