<?php
$con = mysqli_connect('localhost','root','','projectGuidingSystem',3306);


 if(isset($_POST["submit"]))
 {

  $uname= $_POST['uname'];
  $upassword= $_POST['upassword'];

 $sql ="SELECT * FROM signup WHERE UserName='$uname' and
    Password= '$upassword'";


$res=mysqli_query($con,$sql);
$result=mysqli_fetch_array($res);
$count = mysqli_num_rows($res);
if ($count===1) {

    header("location:My Website.html");

}
else
 { 
    echo'<script>alert("Email or Password Incorrect")</script>';
 }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css" />
   
    <title>Document</title>
</head>
<body>

<img class="wave" src="https://i.postimg.cc/sDG8zyXM/wave.png">
    <div class="container">
        
      <div class="img">
        <img src="https://svgshare.com/i/JcM.svg">
      </div>
      <div class="login-content">
     
<form action="/guiding/SGS/Login.php" method="post">
          <img src="https://svgshare.com/i/Jcf.svg">
          <h2 class="title">Welcome</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
             
              <input type="text" class="input" placeholder="UserName" name="uname">
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <input type="password" class="input" placeholder="Password" name="upassword">
            </div>
          </div>
          <a href="Signup.php">Create an account?</a>
          <a href="Adminlogin.php">Admin Login?</a>
          <input type="submit" class="btn" value="Login" name="submit">
          <button data-text="Awesome" class="button">
    <span class="actual-text">&nbsp;uiverse&nbsp;</span>
        </form>
        
      </div>
    </div>
</body>
</html>

</body>
</html>