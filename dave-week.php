<?php include 'includes/header.php' ?>



                 <!----------------:::::::::::::::::::::::: WED 9-25 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="week-1" data-pagination="1">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
                <h1><a href="index.php"data-ajax="false">Dave</a></h1>
           </div>
           
           
              <div data-role="content" ><!---------------- start content-------->
                 
           
             <div class="day"><p>Sept 18 - 22</p></div>
   
   

             <canvas id="week1" class="neg-left-margin" width:"320px" height:"150px"></canvas>
	<script>

			var lineChartData = {
			labels : ["m","t","w","t","f","s","s"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [0,0,0,0,0,0,0]

				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [0,0,56,58,59,21,0]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("week1").getContext("2d")).Line(lineChartData);
	
	</script>


          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll"> 

          
                
           <li class="ui-block-a">
	       <h2>monday</h2>
	       	<span class="ui-li-count no-data">no data</span>  </li>
        	
        	 <li class="ui-block-b">
        <h2>tuesday</h2>
	           	<span class="ui-li-count no-data">no data</span>  </li>        	 
        	 <li class="ui-block-a">
        <h2>wednesday</h2>
	       	<span class="ui-li-count"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">56</a></span>  </li>        	
        	 
        	 <li class="ui-block-b">
          <h2>thursday</h2>
	       	<span class="ui-li-count"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">58</a></span>  </li>
        	
        	 <li class="ui-block-a">
        	<h2 class="high">friday</h2>
	       	<span class="ui-li-count high"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop" >59</a></span>  </li>
        	
			 <li class="ui-block-b">
           <h2 class="low">saturday</h2>
	      	<span class="ui-li-count low"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop" >21</a></li>      	
        	 <li class="ui-block-a">
        	<h2>sunday</h2>
	        <span class="ui-li-count no-data">no data</span>  </li>     	
        	 <li class="ui-block-b neutral">
        	<h2>improvement </h2>
	       	<span class="ui-li-count neutral"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">0%</a></span>  </li>
    

        </ul><!-- /grid-a -->

<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
    <h3>Details</h3>
    <p>coming soon</p>
 
    <a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
</div>




               </div><!---------------- end content-------->          
           
           
            
          <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        
                   <!----------------:::::::::::::::::::::::: WED 9-25 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="home" data-pagination="2">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
           <h1><a href="index.php"data-ajax="false">Dave</a></h1>
            </div>
                    <div data-role="content" ><!---------------- start content-------->
                 
           
             <div class="day"><p>Sept 23 - 27</p></div>
   
   

             <canvas id="week7" class="neg-left-margin" width:"320px" height:"150px"></canvas>
	<script>

			var lineChartData = {
			labels : ["m","t","w","t","f","s","s"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [0,0,56,58,59,21,0]

				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [57,54,67,62,11,0,0]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("week7").getContext("2d")).Line(lineChartData);
	
	</script>


          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll"> 

          
                
           <li class="ui-block-a">
	       <h2 >monday</h2>
	      <span class="ui-li-count"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">57</a></span>  </li> </li>
        	
        	 <li class="ui-block-b">
        <h2>tuesday</h2>
	           	<span class="ui-li-count"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">54</a></span>  </li>      	 
        	 <li class="ui-block-a">
        <h2 class="high">wednesday</h2>
	       	<span class="ui-li-count high"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">67</a></span>  </li>        	
        	 
        	 <li class="ui-block-b">
          <h2>thursday</h2>
	       	<span class="ui-li-count"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">62</a></span>  </li>
        	
        	 <li class="ui-block-a">
        	<h2 class="low">friday</h2>
	       	<span class="ui-li-count low"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">11</a></span>  </li>
        	
			 <li class="ui-block-b">
           <h2>saturday</h2>
	       	  <span class="ui-li-count no-data">no data</span>  </li>      	
        	 <li class="ui-block-a">
        	<h2>sunday</h2>
	        <span class="ui-li-count no-data">no data</span>  </li>     	
        	 <li class="ui-block-b decline">
        	<h2>decline </h2>
	       	<span class="ui-li-count decline"> <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">-0.1%</a></span>  </li>
    

        </ul><!-- /grid-a -->

<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
    <h3>Details</h3>
    <p>coming soon</p>
 
    <a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
</div>




               </div><!---------------- end content------->       
           

            
                   <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->

     </div><!---------------- end page-------->
     
     </body>
     </html>