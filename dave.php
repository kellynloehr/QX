<?php include 'includes/header.php' ?>
<?php 
$files = "https://dl.dropboxusercontent.com/s/fxt0wbtysg96ye2/dave-9-17.txt";



$lines = file($files);//file in to an array

?>

<!----------------:::::::::::::::::::::::: WEDNESDAY 9-18 :::::::::::::::::::::::::::::-------->
        <div data-role="page" id="w9-18" data-pagination="1"  class="ui-responsive-panel ">
      <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                   <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                   <!----------------:::::::::::::::::: PopUP:::::::::::::::::-------->
       	  <div data-role="popup" class="popupBasic" id="popup9-18">
	<p>The higher the point, the more filler words you used during that recording time<p>
	
	</div>


         <section class="container-score"><!---------------- score card-------->
            <div class="card">
            <figure class="front">  <a href="#" class="handle">   
            <div class="day"><p>wednesday</p>
        <p class="score-date">9-18</p></div>
        <img src="images/56.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">1.8</span> hours<p></a> </figure>
            </div>
        </section>
         

        
     <!----------------:::::::::::::::::: start word bars:::::::::::::::::-------->
       <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
                 
	<p ><?php echo $lines[2]?><span class="ui-li-count"><?php echo $lines[3]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[3]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[4]?><span class="ui-li-count"><?php echo $lines[5]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[5]?>"></div></div>
        	 </li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[6]?><span class="ui-li-count"><?php echo $lines[7]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[7]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[8]?><span class="ui-li-count"><?php echo $lines[9]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[9]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[10]?><span class="ui-li-count"><?php echo $lines[11]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[11]?>"></div></div>

        	</li>
			 <li class="ui-block-b">
            <p><?php echo $lines[12]?><span class="ui-li-count"><?php echo $lines[13]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[13]?>"></div></div>

        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[14]?><span class="ui-li-count"><?php echo $lines[15]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[15]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[16]?><span class="ui-li-count"><?php echo $lines[17]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[17]?>"></div></div>
        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[18]?><span class="ui-li-count"><?php echo $lines[19]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[19]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[20]?><span class="ui-li-count"><?php echo $lines[21]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[21]?>"></div></div>
        	</li>
        <a href="#popup9-18" data-rel="popup"> <canvas id="canvas-9-18" width:"320px" height:"150px"></canvas></a>
  

	<script>

		var lineChartData = {
					labels : ["0 h"," "," "," "," "," ","0.9 h "," "," "," "," ","1.8 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [0,0,0,0,0,3,5,3,0,1,0,0,0,0]
				}
			]
			
		}

			var myLine = new Chart(document.getElementById("canvas-9-18").getContext("2d")).Line(lineChartData);
	
	</script>



</ul><!-- /grid-a -->
                       </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        

     
<!----------------:::::::::::::::::::::::: THURS 9-19 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="t9-19" data-pagination="2">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
            <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>thursday</p>
        <p class="score-date">9-19</p></div>
<a href="#" class="handle"><img src="images/58.png"/></a> </figure>
             <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">1.5</span> hours<p></a> </figure>
            </div>
        </section>
        <div data-role="popup" class="popupBasic" id="popup9-19">
	<p>The grey line shows yesterdays points so you can compare and contrast<p>
	
	</div>
<!----------------:::::::::::::::::: PopUP:::::::::::::::::-------->

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
                 
	<p ><?php echo $lines[23]?><span class="ui-li-count"><?php echo $lines[24]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[24]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[25]?><span class="ui-li-count"><?php echo $lines[26]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[26]?>"></div></div>
        	 </li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[27]?><span class="ui-li-count"><?php echo $lines[28]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[28]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[29]?><span class="ui-li-count"><?php echo $lines[30]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[30]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[31]?><span class="ui-li-count"><?php echo $lines[32]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[32]?>"></div></div>

        	</li>
			 <li class="ui-block-b">
            <p><?php echo $lines[33]?><span class="ui-li-count"><?php echo $lines[34]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[34]?>"></div></div>

        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[35]?><span class="ui-li-count"><?php echo $lines[36]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[36]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[37]?><span class="ui-li-count"><?php echo $lines[38]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[38]?>"></div></div>
        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[39]?><span class="ui-li-count"><?php echo $lines[40]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[40]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[41]?><span class="ui-li-count"><?php echo $lines[42]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[42]?>"></div></div>
        	</li>
        	
  <a href="#popup9-19" data-rel="popup"> <canvas id="canvas-9-19" width:"320px" height:"150px"></canvas></a>
  

	<script>

		var lineChartData = {
		labels : ["0 h"," "," "," "," "," ","0.75 h "," "," "," "," ","1.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [0,0,0,0,0,3,5,3,0,1,0,0,0,0,0]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [0,0,0,0,31,40,15,3,0,1,33,0,21]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-9-19").getContext("2d")).Line(lineChartData);
	
	</script>


</ul><!-- /grid-a -->
                      </div><!---------------- end content-------->
                <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->

   <!----------------:::::::::::::::::::::::: FRIDAY 9-20 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="f9-20" data-pagination="3">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

             <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
        
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>friday</p>
	        <p class="score-date">9-20</p></div>
        <a href="#" class="handle"><img src="images/59.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">7.5</span> hours<p></a> </figure>

            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
                 
	<p ><?php echo $lines[44]?><span class="ui-li-count"><?php echo $lines[45]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[45]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[46]?><span class="ui-li-count"><?php echo $lines[47]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[47]?>"></div></div>
        	 </li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[48]?><span class="ui-li-count"><?php echo $lines[49]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[49]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[50]?><span class="ui-li-count"><?php echo $lines[51]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[51]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[52]?><span class="ui-li-count"><?php echo $lines[53]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[53]?>"></div></div>

        	</li>
			 <li class="ui-block-b">
            <p><?php echo $lines[54]?><span class="ui-li-count"><?php echo $lines[55]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[55]?>"></div></div>

        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[56]?><span class="ui-li-count"><?php echo $lines[57]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[57]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[58]?><span class="ui-li-count"><?php echo $lines[59]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[59]?>"></div></div>
        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[60]?><span class="ui-li-count"><?php echo $lines[61]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[61]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[62]?><span class="ui-li-count"><?php echo $lines[63]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[63]?>"></div></div>
        	</li>
        	
      	 <canvas id="canvas-9-20" width:"320px" height:"150px"></canvas>


	<script>

		var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","3.75 h "," "," "," "," "," "," ","7.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data :[0, 0, 0,0,0,0,31,40,15,3,0,1,33,0,21]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [40,9,6,30,13,21,3, 6,120,18,20, 35,20,0,10]
				}
			]
			
		}


	var myLine = new Chart(document.getElementById("canvas-9-20").getContext("2d")).Line(lineChartData);
	
	</script>

        </ul><!-- /grid-a -->
                  </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        

                
         <!----------------:::::::::::::::::::::::: SATURDAY 9-21 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="s9-21" data-pagination="4">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>saturday</p>
              <p class="score-date">9-21</p></div><a href="#" class="handle"><img src="images/21.png"/></a> </figure>
             <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">2.5</span> hours<p></a> </figure>

            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
                 
	<p ><?php echo $lines[65]?><span class="ui-li-count"><?php echo $lines[66]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[66]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[67]?><span class="ui-li-count"><?php echo $lines[68]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[68]?>"></div></div>
        	 </li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[69]?><span class="ui-li-count"><?php echo $lines[70]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[70]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[71]?><span class="ui-li-count"><?php echo $lines[72]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[72]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[73]?><span class="ui-li-count"><?php echo $lines[74]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[74]?>"></div></div>

        	</li>
			 <li class="ui-block-b">
            <p><?php echo $lines[75]?><span class="ui-li-count"><?php echo $lines[76]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[76]?>"></div></div>

        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[77]?><span class="ui-li-count"><?php echo $lines[78]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[78]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[79]?><span class="ui-li-count"><?php echo $lines[80]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[59]?>"></div></div>
        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[81]?><span class="ui-li-count"><?php echo $lines[82]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[82]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[83]?><span class="ui-li-count"><?php echo $lines[84]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[84]?>"></div></div>
        	</li>
            <canvas id="canvas-9-21" width:"320px" height:"150px"></canvas>


	<script>
var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","1.25 h "," "," "," "," "," "," ","2.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [40,9,6,30,13,21,3, 6,120,18,20, 35,20,0,10]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [6,10,18,4,10,0,4, 0,0,0, 5, 0,0,0,0]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-9-21").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        

                
                         <!----------------:::::::::::::::::::::::: SUNDAY 9-22 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="s9-22" data-pagination="5">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
            <figure class="front">
            <div class="day"><p>sunday</p>
            <p class="score-date">9-22</p></div>
            <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            </div>
        </section>
         <div class="empty-message"> <img src="images/no-data.png"/></div>
         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        

   <!----------------:::::::::::::::::::::::: MONDAY 9-23 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="m9-23" data-pagination="6">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>monday</p>
              <p class="score-date">9-23</p></div><a href="#" class="handle"><img src="images/57.png"/></a> </figure>
             <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">2.3</span> hours<p></a> </figure>

            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
                 
	<p ><?php echo $lines[86]?><span class="ui-li-count"><?php echo $lines[87]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[87]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[88]?><span class="ui-li-count"><?php echo $lines[89]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[89]?>"></div></div>
        	 </li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[90]?><span class="ui-li-count"><?php echo $lines[91]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[91]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[92]?><span class="ui-li-count"><?php echo $lines[93]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[93]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[94]?><span class="ui-li-count"><?php echo $lines[95]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[95]?>"></div></div>

        	</li>
			 <li class="ui-block-b">
            <p><?php echo $lines[96]?><span class="ui-li-count"><?php echo $lines[97]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[97]?>"></div></div>

        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[98]?><span class="ui-li-count"><?php echo $lines[99]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[99]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[100]?><span class="ui-li-count"><?php echo $lines[101]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[101]?>"></div></div>
        	</li>
        	 <li class="ui-block-a">
        	<p><?php echo $lines[102]?><span class="ui-li-count"><?php echo $lines[103]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[103]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[104]?><span class="ui-li-count"><?php echo $lines[105]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[105]?>"></div></div>
        	</li>
             <canvas id="canvas-9-23" width:"320px" height:"150px"></canvas>
	<script>

		var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","1.1 h "," "," "," "," "," "," ","2.3 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [6,10,18,4,10,0,4, 0,0,0, 5, 0,0,0,0]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [20,50,70,70,20,0,10, 0,1,0, 10, 6,170,0]
				}
			]
			
		}


	var myLine = new Chart(document.getElementById("canvas-9-23").getContext("2d")).Line(lineChartData);
	
	</script>


        
</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        
   <!----------------:::::::::::::::::::::::: TUESDAY 9-24 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="t9-24" data-pagination="7">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>tuesday</p>
              <p class="score-date">9-24</p></div><a href="#" class="handle"><img src="images/54.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">4.9</span> hours<p></a> </figure>
            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[107]?><span class="ui-li-count"><?php echo $lines[108]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[108]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[109]?><span class="ui-li-count"><?php echo $lines[110]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[110]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[111]?><span class="ui-li-count"><?php echo $lines[112]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[112]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[113]?><span class="ui-li-count"><?php echo $lines[114]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[114]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[115]?><span class="ui-li-count"><?php echo $lines[116]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[116]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[117]?><span class="ui-li-count"><?php echo $lines[118]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[118]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[119]?><span class="ui-li-count"><?php echo $lines[120]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[120]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[121]?><span class="ui-li-count"><?php echo $lines[122]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[122]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[123]?><span class="ui-li-count"><?php echo $lines[124]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[124]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[125]?><span class="ui-li-count"><?php echo $lines[126]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[126]?>"></div></div>
        	</li>
       <canvas id="canvas-9-24" width:"320px" height:"150px"></canvas>

	<script>

		var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","2.45 h "," "," "," "," "," "," ","4.9 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [20,50,70,70,20,0,10, 0,1,0, 10, 6,170,0]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [8,1,14,0,16,32,32, 15,14,0, 31, 60,65,20,]
				}
			]
			
		}


	var myLine = new Chart(document.getElementById("canvas-9-24").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
        
                   <!----------------:::::::::::::::::::::::: WED 9-25 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="w9-25" data-pagination="7">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>wednesday</p>
              <p class="score-date">9-25</p></div><a href="#" class="handle"><img src="images/67.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">3.5</span> hours<p></a> </figure>
            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[128]?><span class="ui-li-count"><?php echo $lines[129]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[129]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[130]?><span class="ui-li-count"><?php echo $lines[131]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[131]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[132]?><span class="ui-li-count"><?php echo $lines[133]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[133]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[134]?><span class="ui-li-count"><?php echo $lines[135]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[135]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[136]?><span class="ui-li-count"><?php echo $lines[137]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[137]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[138]?><span class="ui-li-count"><?php echo $lines[139]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[139]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[140]?><span class="ui-li-count"><?php echo $lines[141]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[141]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[142]?><span class="ui-li-count"><?php echo $lines[143]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[143]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[144]?><span class="ui-li-count"><?php echo $lines[145]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[145]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[146]?><span class="ui-li-count"><?php echo $lines[147]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[147]?>"></div></div>
        	</li>
          <canvas id="canvas-9-25" width:"320px" height:"150px"></canvas>


	<script>

			var lineChartData = {
			labels : ["0 h"," "," "," "," "," ","1.7 h "," "," "," "," "," ","3.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [8,1,14,0,16,32,32, 15,14,0, 31, 60,65,20,]


				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [5,0,0,3,0,5,45, 50,3,23, 2, 0,1,0,]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-9-25").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
                       <!----------------:::::::::::::::::::::::: THURS 9-26 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="t9-26" data-pagination="8">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>thursday</p>
              <p class="score-date">9-26</p></div><a href="#" class="handle"><img src="images/62.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">3.5</span> hours<p></a> </figure>
            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[149]?><span class="ui-li-count"><?php echo $lines[150]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[150]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[151]?><span class="ui-li-count"><?php echo $lines[152]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[152]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[153]?><span class="ui-li-count"><?php echo $lines[154]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[154]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[155]?><span class="ui-li-count"><?php echo $lines[156]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[156]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[157]?><span class="ui-li-count"><?php echo $lines[158]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[158]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[159]?><span class="ui-li-count"><?php echo $lines[160]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[160]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[161]?><span class="ui-li-count"><?php echo $lines[162]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[162]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[163]?><span class="ui-li-count"><?php echo $lines[164]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[164]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[165]?><span class="ui-li-count"><?php echo $lines[166]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[166]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[167]?><span class="ui-li-count"><?php echo $lines[168]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[168]?>"></div></div>
        	</li>
      <canvas id="canvas-9-26" width:"320px" height:"150px"></canvas>


	<script>

			var lineChartData = {
			labels : ["0 h"," "," "," "," "," ","1.7 h "," "," "," "," ","3.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [5,0,0,3,0,5,45, 50,3,23, 2, 0,1,0,]
				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [11,43,60,173,0,5,26, 0,3,0, 2, 0,1,0,]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-9-26").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
                
                
                   <!----------------:::::::::::::::::::::::: FRI 9-27 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="f9-27" data-pagination="9" >
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>friday</p>
              <p class="score-date">9-27</p></div><a href="#" class="handle"><img src="images/11.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">3.5</span> hours<p></a> </figure>
            </div>
        </section>
        

          <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[170]?><span class="ui-li-count"><?php echo $lines[171]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[171]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[172]?><span class="ui-li-count"><?php echo $lines[173]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[173]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[174]?><span class="ui-li-count"><?php echo $lines[175]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[175]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[176]?><span class="ui-li-count"><?php echo $lines[177]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[177]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[178]?><span class="ui-li-count"><?php echo $lines[179]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[179]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[180]?><span class="ui-li-count"><?php echo $lines[181]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[181]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[182]?><span class="ui-li-count"><?php echo $lines[183]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[183]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[184]?><span class="ui-li-count"><?php echo $lines[185]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[185]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[186]?><span class="ui-li-count"><?php echo $lines[187]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[187]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[188]?><span class="ui-li-count"><?php echo $lines[189]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[189]?>"></div></div>
        	</li>
             <canvas id="canvas-9-27" width:"320px" height:"150px"></canvas>


	<script>

			var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","1.7 h "," "," "," "," "," "," ","3.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
				data : [11,43,60,173,0,5,26, 0,3,0, 2, 0,1,0,]

				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [0,0,0,0,0,5,5,0,0,0, 0, 0,0,0,]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-9-27").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
               <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
                
                
                          
                         <!----------------:::::::::::::::::::::::: SATURDAY 9-28 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="s9-28" data-pagination="10">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
            <figure class="front">
            <div class="day"><p>saturday</p>
            <p class="score-date">9-28</p></div>
            <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            </div>
        </section>
         <div class="empty-message"> <img src="images/no-data.png"/></div>
         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
          
                         <!----------------:::::::::::::::::::::::: SUNDAY 9-29 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="s9-29" data-pagination="11">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
            <figure class="front">
            <div class="day"><p>sunday</p>
            <p class="score-date">9-29</p></div>
            <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"><img src="images/sorry.png"/></a> </figure>
            </div>
        </section>
         <div class="empty-message"> <img src="images/no-data.png"/></div>
         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->

                                        
                         <!----------------::::::::::::::::::::::::MONDAY 9-30 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="m9-30" data-pagination="12">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
           
            <div class="day"><p>monday</p>
            <p class="score-date">9-30</p></div>
            <img src="images/sorry.png"/>
            </div>
        </section>
            <div class="empty-message"><img src="images/no-data.png"/></div>

         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
                                                      
                         <!----------------::::::::::::::::::::::::TUESDAY 10-1 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="t10-1" data-pagination="13">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
           
            <div class="day"><p>tuesday</p>
            <p class="score-date">10-1</p></div>
            <img src="images/sorry.png"/>
            </div>
        </section>      
        <div class="empty-message"><img src="images/no-data.png"/></div>   
         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
                                                            
                         <!----------------::::::::::::::::::::::::WEDNESDAY 10-2 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="w10-2" data-pagination="14">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                                       
                 <div data-role="content" ><!---------------- start content-------->
            <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>wednesday</p>
              <p class="score-date">10-2</p></div><a href="#" class="handle"><img src="images/47.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">3.5</span> hours<p></a> </figure>
            </div>
        </section>
        
   <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[212]?><span class="ui-li-count"><?php echo $lines[213]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[213]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[214]?><span class="ui-li-count"><?php echo $lines[215]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[215]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[216]?><span class="ui-li-count"><?php echo $lines[217]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[217]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[218]?><span class="ui-li-count"><?php echo $lines[219]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[219]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[220]?><span class="ui-li-count"><?php echo $lines[221]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[221]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[222]?><span class="ui-li-count"><?php echo $lines[223]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[223]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[224]?><span class="ui-li-count"><?php echo $lines[225]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[225]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[226]?><span class="ui-li-count"><?php echo $lines[227]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[227]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[228]?><span class="ui-li-count"><?php echo $lines[229]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[229]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[230]?><span class="ui-li-count"><?php echo $lines[231]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[231]?>"></div></div>
        	</li>

         <canvas id="canvas-10-2" width:"320px" height:"150px"></canvas>


	<script>

			var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","1.7 h "," "," "," "," "," "," ","3.5 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [0,0,0,0,0,5,5,0,0,0, 0, 0,0,0,]

				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [2,3,8,0,0,5,0, 40,35,0, 2, 0,1,0,0]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-10-2").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
               </div><!---------------- end content-------->
                          <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->
              <!----------------:::::::::::::::::::::::: THURS 10-3 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="home" data-pagination="15">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                                <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>

            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
      
         <section class="container-score">
            <div class="card">
            <figure class="front">  
             <div class="day"><p>thursday</p>
              <p class="score-date">10-3</p></div><a href="#" class="handle"><img src="images/31.png"/></a> </figure>
              <figure class="back">  <a href="#" class="handle"><p class="score-recording">You recorded for <span class="score-hour">3.5</span> hours<p></a> </figure>
            </div>
        </section>
        
  
                <ul data-role="listview" data-count-theme="c" class="ui-grid-a scroll">       
                
                  <li class="ui-block-a">
	<p ><?php echo $lines[233]?><span class="ui-li-count"><?php echo $lines[234]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[234]?>"></div></div>
                
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[235]?><span class="ui-li-count"><?php echo $lines[236]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[236]?>"></div></div>
        	 </li>
        	 
        	 <li class="ui-block-a">
        	<p><?php echo $lines[237]?><span class="ui-li-count"><?php echo $lines[238]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[238]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-b">
            <p><?php echo $lines[239]?><span class="ui-li-count"><?php echo $lines[240]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[240]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[241]?><span class="ui-li-count"><?php echo $lines[242]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[242]?>"></div></div>

        	</li>
        	
			 <li class="ui-block-b">
            <p><?php echo $lines[243]?><span class="ui-li-count"><?php echo $lines[244]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[244]?>"></div></div>

        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[245]?><span class="ui-li-count"><?php echo $lines[246]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[246]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-b">
        	<p><?php echo $lines[247]?><span class="ui-li-count"><?php echo $lines[248]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[248]?>"></div></div>
        	</li>
        	
        	 <li class="ui-block-a">
        	<p><?php echo $lines[249]?><span class="ui-li-count"><?php echo $lines[250]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[250]?>"></div></div>
        	</li>

        	 <li class="ui-block-b">
        	<p><?php echo $lines[251]?><span class="ui-li-count"><?php echo $lines[252]?></span></p>
        	<div class="box-bg"><div class="box<?php echo $lines[252]?>"></div></div>
        	</li>

         <canvas id="canvas-10-3" width:"320px" height:"150px"></canvas>


	<script>

			var lineChartData = {
			labels : ["0 h"," "," "," "," "," "," ","1.8 h "," "," "," "," "," "," ","3.75 h"],
			datasets : [
				{
					
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [2,3,8,0,0,5,0, 40,35,0, 2, 0,1,0,0]

				},
				{
					
					strokeColor : "rgba(239,65,54,1)",
					pointColor : "rgba(239,65,54,1)",
					pointStrokeColor : "#fff",
					data : [14,0,0,2,0,0,13,0,0,0, 0, 0,0,0,]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas-10-3").getContext("2d")).Line(lineChartData);
	
	</script>

</ul><!-- /grid-a -->
              </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->


<!----------------:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-------->                         
<!----------------:::::::::::::::::::::::: NEXT DAYYYYYYY :::::::::::::::::::::::::::::--------> 
<!----------------:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-------->    
        <div data-role="page" id="next-day" data-pagination="444">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>

                 <h1><a href="<?php $actial_link?>#home"><?php echo $lines[0]?></a></h1>
            </div>
            
                 <div data-role="content" ><!---------------- start content-------->
                      
         <section class="container-score">
            <div class="card">
            <figure class="front">
            <div class="day"><p>friday</p>
            <p class="score-date">10-4</p></div>
            <a href="#" class="handle"><img src="images/wink.png"/></a> </figure>
            <figure class="back">  <a href="#" class="handle"></a> </figure>
            </div>
        </section>
        <div class="empty-message">  <img src="images/good.png"/></div>
         <ul data-role="listview" data-count-theme="c" class="scroll">       

       
         </ul>
            </div><!---------------- end content-------->
           <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->


                
                
              </div><!---------------- end page--------><?php include 'includes/footer.php' ?>