<?php

include_once 'server.php';
if(isset($_POST['submit']))
{
    $email = $_POST['user_id'];
    $result = mysqli_query($con,"SELECT * FROM userdetails where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email=$row['email'];
	$email=$row['email'];
	$user_password=$row['user_password'];
	if($email==$fetch_email) {
				$to = $email;
                $subject = "Password Reset";
                $txt = "Your password is : $password.";
                $headers = "From: mlluthuli92@gmail.com" . "\r\n" .
                "CC: leonluthuli@outlook@.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>