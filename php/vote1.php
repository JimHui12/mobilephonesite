<?php
//vote system function
$con = mysqli_connect("localhost", "infs", "7202", "users"); // Establishing connection with server..
if(!$con){
	die('Could not connect:'.mysql_error());//if error, raise error
}
//get value
$username=mysqli_real_escape_string($_POST['username']);
$vote = mysqli_real_escape_string($_POST[ 'vote_val' ]);
//select query
$result = mysqli_query($con, "SELECT * FROM voterecords WHERE username = '$username'");
//check result,if has, error message
if(mysqli_num_rows($result)==1){
		echo "You have already voted.";
}//if not, insert data to database
if(mysqli_num_rows($result)==0){		
	//insert query
	$query = mysqli_query($con,"INSERT INTO voterecords (username, VoteStatus) VALUES ('$username', '$vote')");
	//insert successfully
	if($query){
		echo "You have Successfully voted.";
		}
	//otherwise, error message
	else{
		echo "log in first";
	}
	}


mysqli_close ($con);
?>
