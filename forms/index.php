// <?php
  session_start();  
  include_once 'connect/dbconnect.php';

  $error = false;

  if ( isset($_POST['signup']) ) {
    
    // clean user inputs to prevent sql injections
    $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

     $year = trim($_POST['year']);
    $year = strip_tags($year);
    $year = htmlspecialchars($year);

    
    $county = trim($_POST['county']);
    $county = strip_tags($county);
    $county = htmlspecialchars($county);


        
    $location = trim($_POST['location']);
    $location = strip_tags($location);
    $location = htmlspecialchars($location);
        
  
        
    $postal = trim($_POST['postal']);
    $postal = strip_tags($postal);
    $postal = htmlspecialchars($postal);


    $fax = trim($_POST['fax']);
    $fax = strip_tags($fax);
    $fax = htmlspecialchars($fax);


        
    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);
        
     $cellp = trim($_POST['cellp']);
    $cellp = strip_tags($cellp);
    $cellp = htmlspecialchars($cellp);        
        
    $ippd = trim($_POST['ippd']);
    $ippd = strip_tags($ippd);
    $ippd = htmlspecialchars($ippd);




    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);  

    $pass1 = trim($_POST['pass1']);
    $pass1= strip_tags($pass1);
    $pass1= htmlspecialchars($pass1);
    

    
    
   if (strlen($name) < 5) {
           $error = true;
           echo "<script>alert('must contain 5 xters');</script>";
             }
         else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $error = true;
              echo "<script>alert('Use only characters!');</script>";
            
    }
        else {
        
        // check name exist or not
            $querr = "SELECT Name FROM unireg WHERE Name='$name'";
               $resull = mysql_query($querr);
                $count = mysql_num_rows($resull);
          if($count!=0){
             $error = true;
            echo "<script>alert('Name already in use,choose another!');</script>";
      }
        }



     
        
    //basic email validation
        if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
          $error = true;
         echo "<script>alert('Invalid email address format!');</script>";
    } 
        else {
      // check email exist or not
         $query = "SELECT Email FROM unireg WHERE Email='$email'";
           $result = mysql_query($query);
            $count = mysql_num_rows($result);
          if($count!=0){
          $error = true;
          echo "<script>alert('Email already in use,choose another!');</script>";
      }
    }

    // password validation
         if(strlen($pass) < 6) {
          $error = true;
          echo "<script>alert('Too short,atleast 6 characters!');</script>";
    }
        
    // password  confirmation validation    
     if(strlen($pass1) < 6) {
      $error = true;
        echo "<script>alert('Too short,atleast 6 characters!');</script>";
    }
         else if(strlen($pass!=$pass1)){
           $error = true;
           echo "<script>alert('Passwords do not match!');</script>";
    
        }
    
    // password encrypt using SHA256();
        $password = hash('sha256', $pass);
    
    // if there's no error, continue to signup
    if( !$error ) {      
      $query = "INSERT INTO Homereg(Name,Year,County,Location,Postal,Fascmail,Telephone,Cellphone,IPPD,Email,Pass) VALUES('$name','$year','$county','$location','$regNumber','$postal','$fax','$phone','$cellp','$ippd','$email','$password')";

      $res = mysql_query($query);        
      if ($res) {
        $errTyp = "success";
        $errMSG = "Successfully registered.";
        unset($name);
        unset($email);
        unset($pass);
      } else {
        $errTyp = "danger";
        $errMSG = "Not registered!Exist invalid inputs"; 
      } 
        
    }
    
    
  }
?>/*




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- the above meta tags must appear in that order first in the head -->    
    <!-- Title for the page-->    
  <title>home signup</title>  
  <!-- Bootstrap core CSS must have -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  />
<!-- Bootstrap core js must have -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript" ></script>    
  <!--external css-->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this page/created by user-->
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
 


<style>
body {
    background-image: url("img/login.jpg");
}
</style>

</head>
<body>
        <div id="main">          
        <div id="layout">
        <div class="container">	          
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <table>
             <!-- Setting color red for legend-->                     
         <h5 style="color:red">Please fill all fields below</h5>   	
        
            <?php            
		         	if ( isset($errMSG) ) {
				
			     	?>  
        				<div class="form-group">
            	     <div class="col-md-8 alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
			            	<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                     </div>
            	</div>
                <?php
			             }
			          ?>
                <br /><br /><br />

       <!-- creating fields for form -->
  <tr>          
            <div class="form-group">               
                   <label class="col-sm-1 control-label" for="name">Home Name</label>
                    <div class="col-sm-2">     
                	<input type="text" name="name" class="form-control" placeholder="Childrens home name" maxlength="50" value="<?php echo $name ?>" required />
                  </div>
                 <span class="text-danger"><?php echo $nameError; ?></span>    


            <div class="form-group">                              
                     <label class="col-sm-1 control-label" for="year">Year Founded:</label>
                    <div class="col-sm-2">     
                        <input type="text" name="year" class="form-control" placeholder="Year started" maxlength="50" required >
                    </div> 

                  <div class="form-group">
                   <label class="control-label col-sm-1" for="county">County:</label>
                      <div class="col-sm-2">
                         <input type="text" name="county" class="form-control" placeholder="County located" maxlength="50" required >
                      </div>
                </div>
              </div>
             </div>
  </tr>
<br /><br />


<tr>
                           
                          
                   <div class="form-group">                      
                     <label class="control-label col-sm-1" for="location">Location:</label>
                     <div class="col-sm-2">
                     <input type="text" name="location" class="form-control" placeholder="exact place e.g town " maxlength="50" required >
                     </div>
                              
      
         
             <div class="form-group">            
                <label class="control-label col-sm-1"  for="postal">Postal code:</label>
                    <div class="col-sm-2">
               <input type="website" name="postal" class="form-control" placeholder="home postal code" maxlength="50" required>
                   </div>              

           <div class="form-group">            	                
             <label class="col-sm-1 control-label" for="fax">Fascmail:</label>
                    <div class="col-sm-2">     
                       <input type="text" name="fax" class="form-control" placeholder="home fax" maxlength="50" required >
                    </div>
             </div>
             </div>
            </div>
 </tr>
   <br /><br />

<tr>
            <div class="form-group">
                   <label class="control-label col-sm-1" for="phone">Telephone:</label>
                      <div class="col-sm-2">
                      <input type="text" name="phone" pattern =".{10}" class="form-control" placeholder=" Telephone" maxlength="50" required >
                    </div>              
               
                <div class="form-group">            
                     <label class="control-label col-sm-1"  for="cellp">Cellphone:</label>
                    <div class="col-sm-2">
                       <input type="text" name="cellp" pattern =".{10}" class="form-control" placeholder="cellphone" maxlength="50" required>
                   </div>

               <div class="form-group">            	                
                    <label class="col-sm-1 control-label" for="IPPD">IPPD CODE:</label>
                   <div class="col-sm-2">     
                      <input type="text" name="ippd" class="form-control" placeholder="IPPD or EMIS CODE " maxlength="50" required >
                    </div>
            
            </div>
           </div>
         </div>
    </tr>
<br /><br />

<tr>
       <div class="form-group">
             <label class="col-sm-1 control-label" for="university email">Email</label>
              <div class="col-sm-2"> 
            	 <input type="email" name="email" class="form-control" placeholder="University email" maxlength="40" value="<?php echo $email ?>" required/>
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>         
           
            <div class="form-group">
                <label class="col-sm-1 control-label" for="password">Password</label>
                <div class="col-sm-2">
            	     <input type="password" name="pass" class="form-control" placeholder="Choose Password" maxlength="15" required />
                </div>
                    <span class="text-danger"><?php echo $passError; ?></span>
                
             <div class="form-group">                      
                 <label class="control-label col-sm-1" for="pass1">Confirm Password:</label>
                    <div class="col-sm-2">
            	      <input type="password" name="pass1" class="form-control" placeholder="Confirm Password" maxlength="50" value="<?php echo $pass1Error?>" required />
                    </div>
                <span class="text-danger"><?php echo $pass1Error; ?></span>
               </div> 
            </div>
      </div>
  </tr>
 <br /><br /><br />


        <tr>
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
            	 <button type="reset" class="btn btn-danger" name="reset">Clear</button>
            </div>            
            
        </tr>
        
        <!--Inserting back buton to redirect to home/index page-->
       <tr>
            <div class="form-group">               
                <font color="red">Already Registered</font><div>
            	<a href="login.php"><button type="button" class="btn btn-primary btn-xs">Sign in Here</button></a>
            </div>
        </div>
 </tr>
                
                        <!--Inserting back buton to redirect to login page-->
 <tr>
         <div class="form-group">
        <td width="100"><a href="index.php"><button type="button" class="btn btn-warning btn-xs">Back</button></a></td>
        </div>        
 </tr>

 </div>
 </table>
 </form>
 
                                      <!--setting copyright in sliding manner-->
              <footer>
                <div id="footer" style="marquee-style:alternate;">
               <table width="1100" style="marquee-style:alternate;">
                 <tr>
                    <td width="1100">&nbsp;</td>
                     <!--setting copyright color red-->
                   <td width="1100" style="color:red"><span><marquee style="marquee-style:scroll;">Copyright &copy;GkVnEmtechnologies 2017</marquee></span></td>
                  <td width="1100">&nbsp;</td>
               </tr>
             </table>
             </div>
            </footer>
          </div>
        </div>
       </div>
     </body>
  </html>
            
