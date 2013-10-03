<!DOCTYPE html>
<html>
    <head>
        <title>QX</title>
        
        <meta name="viewport" content="width=device-width,height=device-height,minimum-scale=1,maximum-scale=1"/>
         <link rel="stylesheet" href="css/style.css" />
         
           <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
           <script src="js/jquery.js"></script>
               <script>
            $(document).on("mobileinit",function() {
                $.mobile.autoInitializePage = false;
            });  
            $(document).ready(function() {            
    window.location.hash = 'home';
    $.mobile.initializePage();
});      
        </script>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        	
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
            
            
	<script src="js/Chart.js"></script>
	  	<script src="js/mondernizr.js"></script>
        <script src="js/main.js"></script>
      
        
   
        </head>
        
        <script>

var handleMove = function (e) {
    if($(e.target).closest('.scroll').length == 0) { e.preventDefault(); }
    
}

document.addEventListener('touchmove', handleMove, true);

</script>

    
<body > 

       