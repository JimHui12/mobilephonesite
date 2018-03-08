<?php
$con = mysqli_connect("localhost", "infs", "7202", "users"); // Establishing connection with server..
if(!$con){
	die('Could not connect:'.mysql_error());
}
 // Selecting Database.
$username=mysqli_real_escape_string($_POST['username1']); // Fetching Values from URL.
$password=mysqli_real_escape_string($_POST['password1']); // Password Encryption, If you like you can 
//also leave sha1.
// check if e-mail address syntax is valid or not
// Matching user input email and password with stored email and password in database.
$result = mysqli_query($con, "SELECT * FROM registration WHERE username='$username' and password='$password'");
//get query result
$row=mysqli_fetch_array($result);
//check username and password 
if($row['username']==$username && $row['password']==$password){
echo "Successfully Logged in...";
}else{
echo "Username or Password is wrong...!!!!";
}
mysqli_close ($con); // Connection Closed.
?>