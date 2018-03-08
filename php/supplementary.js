/*
  use these functins to direct to specific phone page
*/

   			 function enterOne(){
        	 window.location='iphone6s-information.html';   
   			 }
   			 function enterTwo(){
        	 window.location='iphone7-information.html';   
   			 }
   			 function enterThree(){
        	 window.location='huawei%20mate%209-information.html';   
   			 }
   			 function enterFour(){
        	 window.location='huawei%20p9-information.html';   
   			 }

	/*--Slide Show--*/
    /****orignal source from youtube
      *    Title: Image Slider (2/3) HTML 5 CSS 3 and JavaScritp
      *    Author: RK Tutorial
      *    Date: 05/11/2016
      *    Code version: NA
      *    Availability: https://www.youtube.com/watch?v=lOrMfHYLhIw&t
      ***/ 

      window.onload = function() {
 	 	showImage(1);
		};
		//once click the button, implement plusIndex, and index +1 or -1 to change photo
		var index=1;
		function changeIndex(n){
			index = index+n;
			showImage(index);
		}

		function showImage(n){
			var i;
			//get collection of pictures
			var x =document.getElementsByClassName("photo");
			
			//once index is greater than picture's qty, back to picture 1
			if (n >x.length){
				index =1;
			}
			//once index is indicating the first picture, back to last one
			if (n <1){
				index =x.length;
			};
			//hide all pictures firstly
			for(i=0;i<x.length;i++){
				x[i].style.display = "none";
			}
			//show current selected pictures
			x[index-1].style.display = "block";
		}
		

	/*use this function to logout and eraseCookie
  */
	function logout(){
		var user = getCookie("username");
		if(user!=""){			
		eraseCookie("username");
		}
	}


/*Vote Fuction for vote system
*/
function vote(){
		var selection=document.getElementsByTagName("input");
		var selected= false;
		var user =getCookie("username");
		for(var i=0;i<selection.length;i++)
		{
			if(selection[i].checked)
			{
				selected=selection[i].value;
			}
		}
if(selected==false){
		alert("Please select one phone!");
	}
else
	{
		if(user==""){
			alert("log in first");
		}
		else{
	$.ajax({
			type: "POST",
			url: "php/vote1.php",
			data:{
				username: getCookie("username"),
				vote_val: selected
			},
		success: function(data) {
				window.alert(data);
		},
		error: function(){
			window.alert("something wrong");
		}
 	});
}
}
};

