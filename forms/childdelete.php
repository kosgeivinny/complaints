<?php
include "../connect/connect.php";
$adm_no=$_REQUEST['adm_no'];
	$kun = "DELETE FROM child WHERE Admission_number='$adm_no'";
  
    if ($conn->query($kun) === TRUE) {
    ?>
        <script> alert ('Record deleted successfully!!');
        window.location.assign('../forms/staffview.php');
        </script>
        <?php
} else {
    echo "Error deleting record: " . $conn->error;
}
?>