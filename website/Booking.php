<?php
$conn = mysqli_connect('localhost','root','','projectGuidingSystem',3306);


 if(isset($_POST['submit']))
 {
  $uname= $_POST['uname'];
  $uemail= $_POST['uemail'];
  $places= $_POST['places'];
  $Peoples= $_POST['Peoples'];
  


    $sql = "INSERT INTO booking (UserName,Email,Place,Peoples)
    VALUES ('$uname', '$uemail', '$places','$Peoples')";
 
 
$rdx=mysqli_query($conn,$sql);

if ($rdx===TRUE) {
header('location:bookingnext.html');
}
else{
echo '<script>alert("Account Not Created")</script>';
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
	<link rel="stylesheet" href="bookingform.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>

<div class="wrapper">


	<div class="container">
		<div class="container-time">
				<h2 class="heading">Read Before Booking</h2>
				<h5 class="heading-days">Trip Arrive 7am From Wah Cantt </h5>
                <h5 class="heading-days">Trip Arrive 7am From Islamabad </h5>
				<p>Every Wednesday and Saturday</p>
				<p>Book Your Ticket As soon as Possible</p>

				<h3 class="heading-days">Bank Account </h3>
				<p></p>
				<p><h1>Bank Account UBL</h1> 0412334576754</p>

				<hr>

				<h4 class="heading-phone">Call Us: 03350587032</h4>
		</div>

		<div class="container-form">
		<form action="/guiding/SGS/Booking.php"  method="post">
					<h2 class="heading heading-yellow">SJS BOOKING</h2>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" placeholder="Your Name" name="uname">
					</div>
					<div class="form-field">
						<p>Email Address</p>
						<input type="email" placeholder="Your email" name="uemail">
					</div>
					<div class="form-field">
                        <label for="place"><h6>Please chose an place</h6></label>

                        <select name="places" id="pet-select" >
                            
                            <option value="Naran Kaghan">Naran Kaghan</option>
                            <option value="Sakardu">Sakardu</option>
                            <option value="Neelam Valley">Neelam Valley</option>
                            <option value="kumrat">kumrat</option>
                            
                        </select>
                        



					</div>
                    
					<div class="form-field">
						<p>How many people?</p>
						<select name="Peoples" id="#">
							<option value="1">1 person</option>
							<option value="2">2 persons</option>
							<option value="3">3 persosn</option>
							<option value="4">4 persons</option>
							<option value="5">5 persons</option>
							<option value="5+">5+ persons</option>
						</select>
				
                   
          </div>
                

		  <button class="btn" name="submit">Sign Up </button>
				</form>
		</div>
	</div>
</div>	
	
</body>
</html>