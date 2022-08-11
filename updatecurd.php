<?php

 include 'Connect.php';
 
 if(isset($_REQUEST['submit'])){
 $id = $_REQUEST['Registerid'];
 $username = $_REQUEST['username'];
 $uemail = $_REQUEST['uemail'];

  $q="UPDATE booking SET UserName ='$username',Email='$uemail'
  WHERE  id='$id'";


$quer=mysqli_query($con,$q);
if($quer)
{
header("Location:crud.php");
}
}

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<?php
  if(isset($_REQUEST['Registerid'])){
    $id=$_REQUEST['Registerid'];
    $query="SELECT * FROM  booking WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
      while($data=mysqli_fetch_assoc($result))
      {
       ?>       
          <form action="" method="post">
            <input type='hidden' name="updateid" value="<?php echo $data['id']?>> 
            <div class="col-lg-6 m-auto">
            <br><br>
            <div class="card">
            <div class="card-header bg-dark">
            <h1 class="text-white text-center">  Update Operation </h1>
            </div><br>

            <label> Username: </label> 
            <input type="text" name="username" class="form-control" value="<?php echo $data['UserName']?>"> <br>

            <label>Email: </label>
            <input type="Email" name="uemail" class="form-control" value="<?php echo $data['Email']?>"> <br>

            <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

            </div>
          
          </form>
       <?php
      }
    }
  }
?>
 </div>
</body>
</html>