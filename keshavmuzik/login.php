<?php 

session_start();
?>

<!doctype html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<?php 
if(iss
et($_POST['loginbutton'])){
  
  require 'connection ui.php';
$sql="select password from user where email='".$_POST['email']."'";
$result=mysqli_query($conn,$sql);
$arr=mysqli_num_rows($result);
if($arr==0){echo "create account";}


else{
  if($_POST['password']==mysqli_fetch_assoc($result)['password']){
    
  $_SESSION['email']=$_POST['email'];
  $_SESSION['dfdf']="sdsdasd";
  header("Location:http://localhost/keshavmuzik/home.php");
    exit();
  }
  else{
    echo "your password is wrong";
  }
  
}




}
else{
echo '<center><h1>LOG IN</h1></center>
  <div class="container">
  <form method="post" action="login.php">
  
    <div class="mb-3">
     <center><label  class="form-label">Email address</label></center>
      <input type="email" name="email" class="form-control" width="34px">
      <div id="emailHelp" class="form-text">We\'ll never share your email with anyone else.</div>
    </div>
  
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
   
    <button  name="loginbutton" class="btn btn-primary">Submit</button>
  
  </form>

  ';
}

?>

</body>
</html>