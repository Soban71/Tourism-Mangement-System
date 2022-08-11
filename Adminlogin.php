<?php
$con = mysqli_connect('localhost','root','','projectGuidingSystem',3306);

 if(isset($_POST["submit"]))
 {

  $uname= $_POST['uname'];
  $upassword= $_POST['upassword'];

 $sql ="SELECT * FROM Admminsignup WHERE UserName='$uname' and
    Password= '$upassword'";


$res=mysqli_query($con,$sql);
$result=mysqli_fetch_array($res);
$count = mysqli_num_rows($res);
if ($count===1) {

    header("location:crud.php");
  
}
else{
    echo'<script>alert("Email or Password Incorrect")</script>';
}
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="Adminlogin.css" />
	<title>Admin Login</title>

</head>
<body>
    

	<div class="parent clearfix">
	
		<div class="bg-illustration">
            
		  <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">
	
		  <div class="burger-btn">
            
			<span></span>
			<span></span>
			<span></span>
		  </div>
	
		</div>
       
		<div class="login">
       
		  <div class="container">
       
			<h1>Admin Login</h1>
		
			<div class="login-form">
            <form action="/guiding/SGS/AdminLogin.php"method="post">
				<input type="Name" placeholder="UserName" name="uname">
				<input type="password" placeholder="Password" name="upassword">
	
				<div class="remember-form">
				  <input type="checkbox">
				  <span>Remember me</span>
				</div>
				<div class="forget-pass">
				  <a href="Adminsignup.php">Create New Admin</a>
				  <br>
				  <br>
				  <a href="Login.php">User Login</a>
				  
				</div>
	
				<button type="submit" name="submit">LOG-IN</button>
	
			  </form>
			</div>
		
		  </div>
		  </div>
	  </div>
</body>
</html>