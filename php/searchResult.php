<html>
     <head>
	     <title>All Mobile Search Result</title>		 
	     <meta charset="UTF-8">	
		  <link href = "styleSearch.css" rel ="stylesheet"/>
		  <script type="text/javascript" src="jquery.js"></script>
		  <script type="text/javascript" src="supplementary.js"></script>
	</head>

	 
	  <body>
      <div id="wrapper"> 
      	<!--navigaiton bar-->
		  <div id = "navdiv">	        		   
		   </div>
		   <!--Logo-->
		   <div id = "Logo">
		   <img src="all mobile400.png" alt="All Mobile Logo"/>
		   </div>
		   <!--search Result-->
		   <div id="Search_Result">

			   <!--Search Bar-->
		   <!--orignal source from youtube
			*    Title: How to Build a Website #4 - Creating a WORKING Search 	   Bar [Part 2] [PHP & MySQL]
			*    Author: Joe Dracup
			*    Date: 26/03/2016
			*    Code version: NA
			*    Availability: https://www.youtube.com/watch?v=Wvs6sbLN3NI&t
			-->
			    <?php
	
	
	$search = $_GET["result"];

	$con = mysqli_connect('localhost','infs','7202') or die(mysqli_error());
	$db = mysqli_select_db($con,'database_for_searchbar');
	$sql= "SELECT * FROM phone WHERE PhoneName LIKE '%".$search."%'";
	$queryNew = mysqli_query($con,$sql);
	//when queryNew result is 0
		if(mysqli_num_rows($queryNew)==0){
			echo "<h2>Sorry, nothing was found!</h2>";
		}
		//when queryNew result is 1
		if(mysqli_num_rows($queryNew)==1){
			echo "<p><h2>There is 1 search result!</h2></p>";
			//show the phone image with url
			while($linkNew = mysqli_fetch_array($queryNew)){
				$image = $linkNew['Photo'];	
			echo "<a href='".$linkNew['url']."'><img src='".$image."'/></a><br>";
				//show phone name with url
				echo "<a href='".$linkNew['url']."'><h3>".$linkNew['PhoneName']."</h3></a><br>";
								
			}	
		}
		//when queryNew result is greater than 1
		if(mysqli_num_rows($queryNew)>=2){
			echo "<p><h2> There are ".mysqli_num_rows($queryNew)." search results!</h2></p>";
			//show the phone image with url
			while($linkNew = mysqli_fetch_array($queryNew)){
				$image = $linkNew['Photo'];				
			echo "<a href='".$linkNew['url']."'><img src='".$image."'/></a><br>";
				//show phone name with url
				echo "<a href='".$linkNew['url']."'><h3>".$linkNew['PhoneName']."</h3></a><br><br>";
							
			}	
		}	
?>
   
  

		   
		   
		
			    


		  

	 <footer>
		     <div id="footer-page">
	
		    </div>
           </footer>
            </div>
	</div>	     
			 
           <button id="backtotop" title="Go to Top" onclick="topFunction()">Back to Top</button>
		 
		  


<script src="samenav.js"></script>
<script src="backtotop.js"></script>
	 </body>
</html>


