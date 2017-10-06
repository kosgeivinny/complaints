<?php
include "../connect/connect.php";
$adm_no=$_REQUEST['adm_no'];
	$kun = "DELETE FROM adopter WHERE Admission_number='$adm_no'";
  
    if ($conn->query($kun) === TRUE) {
    ?>
        <script> alert ('Rejection done successfully!!');
        window.location.assign('../forms/staffview.php');
        </script>
        <?php
} else {
    echo "Error on Rejection: " . $conn->error;
}
?>