<!DOCTYPE html>
<html lang="en">

<head>
    <title> Home Registration </title>

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
 


<style>
body {
    background-image: url("img/login.jpg");
}
</style>

</head>
<body>
 <div class="container">
  <br>
  <br>
  <div id="wrap">
  <div class="col-lg-8 well" style="background-color: black;">
  <div class="row">
    <form class="inline"id="form_staff" role="form" action="forms/home_connect.php" method="POST" enctype="multipart/form-data">
      <h5 style="color:red" align="center"> <b> You need to register the organisation/childrens' home you work with first!! </b> </h5>
      <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <label> Home Photo: </label>
                  <input type="file" name="image" />
                </div>
                <div class="col-sm-6 form-group">
            <label> Year Founded: </label>
            <input type="int"class="form-control" name="year" placeholder="Year Established">
          </div>
              </div>
              <div class="row">
          <div class="col-sm-6 form-group">
            <label> Home Name: </label>
            <input type="text"class="form-control" name="name" placeholder="Home name">
          </div>
          <div class="col-sm-6 form-group">
            <label> Home ID: </label>
            <input type="text"class="form-control" name="childrenshomeid" placeholder="Home ID">
          </div>
            
          
    
        </div>
      
        <div class="row">
          <div class="col-sm-6 form-group">
            <label> Country: </label>
            <input type="text" class="form-control" name="country" placeholder="Country">
            </div>

            <div class="col-sm-6 form-group">
            <label> City/State </label>
            <input type="text"class="form-control" name="city" placeholder="City/State">
            </div>
      
          </div>
          <div class="row">
        
          <div class="col-sm-6 form-group">
            <label> Bank Account(s): </label>
            <input type="text" class="form-control" name="account" placeholder="Bank Account(s)">
          </div>
          <div class="col-sm-6 form-group">
            <label> Telephone: </label>
            <input type="int" class="form-control" name="telephone" placeholder="Telephone number">
          </div>
          
        </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <label> Postal Code/Address: </label>
            <input type="text" class="form-control" name="address" placeholder="Postal Address">
          </div>
        

          
          <div class="col-sm-6 form-group">
            <label> Email Address: </label>
            <input type="email"class="form-control" name="email" placeholder="Email Address">
          </div>
      
          
      </div>
            
            <div class="row">
        <div class="col-sm-4 form-group">
        
          <button type="submit" class="btn btn-success" name="submit" ><span class="glyphicon glyphicon-plus-sign"></span> PROCEED </button>
        </div>
        <div class="col-sm-3 form-group">
          <button type="reset" class="btn btn-warning" name="reset" ><span class="glyphicon glyphicon-minus-sign"></span> Reset </button>
        </div>
      </div>
    </div>
      
    </div>
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>