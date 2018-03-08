<?php
$con = mysqli_connect("localhost", "infs", "7202", "users"); // Establishing connection with server..
if(!$con){
	die('Could not connect:'.mysql_error());
}
$name=mysqli_real_escape_string($con,$_POST['name1']); // Fetching Values from URL.
$email=mysqli_real_escape_string($con,$_POST['email1']);
$password=mysqli_real_escape_string($con,$_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  		echo "Invalid Email.......";
	}
else{
	$result = mysqli_query($con,"SELECT * FROM registration WHERE email= $email");
	//$data = mysqli_num_rows($result);
//check result if no result
	if(!$result){
			$Encrypted_pass = password_hash($password, PASSWORD_DEFAULT);

			$query = mysqli_query($con,"INSERT INTO registration (username, email, password) VALUES ('$name', '$email', '$Encrypted_pass')"); // Insertquery
			//check insert query is successful
			if($query){
						echo "You have Successfully Registered.";
					  }
			else{
						echo "This username is already registered, Please try another username.";
				}
			}
	//if has result, alert is already registered message
	else{
		echo "This username is already registered, Please try another username.";
    	}
	}
mysqli_close ($con);//close database
?>