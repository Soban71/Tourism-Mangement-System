<?php
$conn = mysqli_connect('localhost','root','','projectGuidingSystem',3306);


 if(isset($_POST["submit"]))
 {
  $id=$_POST['id'];
  $uname= $_POST['uname'];
  $uemail= $_POST['uemail'];
  $upassword= $_POST['upassword'];



    $sqli = "INSERT INTO signup (id,UserName,Email,Password) 
    VALUES ('$id','$uname', '$uemail', '$upassword')";

$rdx=mysqli_query($conn,$sqli);

if ($rdx===TRUE) {
header("location:Login.php");
}
else{
echo '<script>alert("Account Not Created")</script>';;
}
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Signup</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="signup.css" type="text/css" media="all" />

</head>

<body>
<form action="/guiding/SGS/Signup.php"  method="post">
	
	 <section class="w3l-workinghny-form">
   
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                   
                   
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                        <img src="images/2.png" class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                            <h2>Where to?</h2>
                            <form action="/guiding/SGS/Signup.php" class="signin-form" method="post">
								<div class="one-frm">

									<label>Registerid</label>
									<input type="text" name="id"  placeholder="Registeration Id" required="">
								</div>

                                <div class="one-frm">

                     <label>Name</label>
                    <input type="text" name="uname"  placeholder="Name" required="">
   </div>
                                <div class="one-frm">

									<label>Email</label>
									<input type="email" name="uemail"  placeholder="Email" required="">
								</div>
								<div class="one-frm">
									<label>Password</label>
									<input type="password" name="upassword"  placeholder="Password" required="">
								</div>
                                <label class="check-remaind">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="remember">Remember Me</p>
              </label>
                   <button class="btn btn-style mt-3" name="submit">Sign Up </button>
      <p class="already">Already Have Account<a href="Login.php">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>


</body>

</html>

