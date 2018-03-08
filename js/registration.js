//register validation
$(document).ready(function() {
	//set submit function
	$("#registerForm").submit(function(e) {
		e.preventDefault();
		//get value 
		var name = $("#usernamesignup").val();
		var email = $("#emailsignup").val();
		var password = $("#passwordsignup").val();
		var cpassword = $("#passwordsignup_confirm").val();
		//check is empty and alert wrong message
		if (name == '' || email == '' || password == '' || cpassword == '') {
			alert("Please fill the empty field!");
		} else if ((password.length) < 8) {
			alert("Password should larger than 8 character!");
		} else if (!(password).match(cpassword)) {
			alert("Your passwords don't match. Try again, please.");
		}//post data to php file
		 else {
			$.post("php/register.php", {
				//post data
				name1: name,
				email1: email,
				password1: password
			}, function(data) {
				//check data
				if (data == 'You have Successfully Registered.') {
					//if success, set cookie
					setCookie("username",name,3);
					//go to home page
					window.location = "https://infs3202-s3x1g.uqcloud.net/wis/Group%20Project%201.html"
					//alert message
					checkCookie();
				}
				// alert error message
				else if(data == 'This username is already registered, Please try another username.'){
					alert("This username is already registered, Please try another username.");
				}
			});
		}
	});
});