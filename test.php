<!doctype html>
<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","ExploreQassim")
or die(mysqli_connect_error());
echo "connect done"."<br>";

mysqli_query($con,"CREATE TABLE IF NOT EXISTS suggestion(
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  name VARCHAR(30),
  email VARCHAR(50),
  message TEXT)")
  or die(mysqli_connect_error());
echo "created";
$query="INSERT INTO suggestion(name,email,message)VALUES(' " .$_POST["username"]." ',' ".$_POST["useremail"]." ', ' ".$_POST["message"]." ')";
mysqli_query($con,$query)
or die(mysqli_connect_error());
echo "<br>"."inserted";
if(isset($_POST['submitb'])){
  echo "<script>alert('شكرا لك ! سعيدين باقتراحاتك');</script>";
}

?>
</body>
</html>
