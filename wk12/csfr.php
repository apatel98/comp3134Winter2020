<?php
$displayForm = true;
$email = $_POST['uname'];
$password = $_POST['psw'];
if(isset($_POST['psw']) && isset($_POST['uname'])){
  $displayForm = false;
  $successMsg = 'Successfully logged in';
  $failMsg = 'Failed to log in';
  if($email === 'host' && $password === 'pass'){
	echo "<div>".$successMsg."</div>";
  }
  else {
	echo "<div>".$failMsg."</div>";
 }
}
if($displayForm){
?>
<form action="csfr.php" method="POST">
	<label for="uname"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="uname" required>
	<label for="psw"><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="psw" required>
    	<button type="submit">Login</button>
</form>
<?php
}
?>

