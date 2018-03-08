//login function
$(document).ready(function(){
	//login button submit function
	$("#loginForm").submit(function(e){
		e.preventDefault();
		// get value from user input
		var username = $("#username").val();
		var password = $("#password").val();
		// Checking for blank fields.
		if( username =='' || password ==''){
			$('input[type="text"],input[type="password"]').css("border","2px solid red");
			$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
			alert("Please fill all fields...!!!!!!");
		}//post data to php file
		else {
			$.post("php/login.php",{
				//post data
			 username1: username, 
			 password1:password
			},function(data) {
				//alert error function
				if(data=='Username or Password is wrong...!!!!'){
				$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
				alert(data);
				} else if(data=='Successfully Logged in...'){
					//set cookie
					setCookie("username",username,3);
					//go to home page
				window.location = "https://infs3202-s3x1g.uqcloud.net/wis/Group%20Project%201.html";
				// alert welcome function
				checkCookie();
				} 
			});
		}
	});
});