
<?php
include "../connect/connect.php";
session_start();
  if( isset($_POST["login"])) {
   $username=$_POST['username']; 
     $password=($_POST['password']);
     $encypass=md5($password);
            
   
      $sql= "SELECT * FROM staff INNER JOIN home WHERE staff.Home_ID=home.Home_ID AND Username = '$username' AND Password = '$password' ";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1){
            while($row=mysqli_fetch_assoc($result)){
                $firstname=$row['First_name'];
                
                $_SESSION['name']=$row['First_name'];
                $_SESSION['Photo']=$row['Image'];
                $_SESSION['logo']=$row['Logo'];
                $_SESSION['id']=$row['Home_ID'];


                
            }//end of while loop
            ?>
    <script>
        window.location.assign('../forms/stafff.php');
    
    </script>
            <?php
        }//end of if login is successfull
        else{
        ?>
        <script> alert ('Invalid username or password Please try again!');
        window.location.assign('../index.php');
        </script>
        <?php
        }
    }

?>