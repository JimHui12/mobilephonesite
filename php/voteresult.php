<html>
     <head>
         <title>All Mobile Vote Result</title>         
         <meta charset="UTF-8"> 
          <link href = "styleVote.css" rel ="stylesheet"/>
          <script type="text/javascript" src="jquery.js"></script>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load('current', {packages: ['corechart']});     
   </script>
    </head>

     
      <body>
      <div id="wrapper">
     

          <div id = "navdiv">   
                   
           </div>
           
           <div id = "Logo">
           <img src="all mobile400.png" alt="All Mobile Logo"/>
           </div>

            <div id=vote_result>

            <!-- original source from google charts
            * Title: Bar Charts 
            * Availability: https://developers.google.com/chart/interactive/docs/gallery/barchart
            -->
           <div id="container" style="width: 550px; height: 400px; margin: 0 auto; "></div>
           -->
         <script type="text/javascript">
        
          function drawChart() {
          // Define the chart to be drawn.
           var data = google.visualization.arrayToDataTable([
          ['Phone Name', 'Vote Quantity',{ role: 'style' }],
            //use php to get vote quatity for each phone
             <?php 

              $con = mysqli_connect('localhost','infs','7202') or die(mysqli_error());
              $db = mysqli_select_db($con,'users');

              $query1 = "SELECT * FROM voterecords WHERE VoteStatus='Iphone7'";
              $query2 = "SELECT * FROM voterecords WHERE VoteStatus='Iphone6S'";
              $query3 = "SELECT * FROM voterecords WHERE VoteStatus='Huawei Mate9'";
               $query4 = "SELECT * FROM voterecords WHERE VoteStatus='Huawei P9'";

              $result1 = mysqli_query($con,$query1);
              $result2 = mysqli_query($con,$query2);
              $result3 = mysqli_query($con,$query3);
              $result4 = mysqli_query($con,$query4);

              $num1 = mysqli_num_rows($result1);
              $num2 = mysqli_num_rows($result2);
              $num3 = mysqli_num_rows($result3);
              $num4 = mysqli_num_rows($result4);

              echo "['Iphone7',$num1,'#FC79bb'],";
              echo "['Iphone6S',$num2,'#FCFC79'],";
              echo "['Huawei Mate9',$num3,'#7979FC'],";
              echo "['Huawei P9',$num4,'#79FCBB'],";
 
 ?>
 
      
      ]);


        // Set chart options
      var options = {'title':'Vote Result',
        'titleTextStyle': {
        'fontSize':30},
        'width':700,
        'height':400,      
      };

   // Instantiate and draw the chart.
   var chart = new google.visualization.BarChart(document.getElementById('container'));
   chart.draw(data, options);
    }
google.charts.setOnLoadCallback(drawChart);
</script>
     

         </div>

    </div>       


           <button id="backtotop" title="Go to Top" onclick="topFunction()">Back to Top</button>
         
          <footer>
             <div id="footer-page">
    
            </div>
           </footer>


<script src="samenav.js"></script>
<script src="backtotop.js"></script>
     </body>
</html>

