<!DOCTYPE HTML> 
<html>
<head>
<title>Swipe 2</title>

<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="apple-touch-startup-image" href="apple-touch-startup-image-320x460.png" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="apple-touch-startup-image-768x1004.png" /><link rel="apple-touch-icon" href="images/qx.png" />

<link href='css/style.css' rel='stylesheet'/>
<link href='css/styles-mediaquery-reporter.css' rel='stylesheet'/>
<!-- Mobile viewport optimized: j.mp/bplateviewport -->	
		<meta name="viewport" content="width=device-width,initial-scale=1">

<?php 
$myFile = "test.txt";
$lines = file($myFile);//file in to an array


?>
<script>
function hideAddressBar()
{
  if(!window.location.hash)
  {
      if(document.height < window.outerHeight)
      {
          document.body.style.height = (window.outerHeight + 50) + 'px';
      }
 
      setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
  }
}
 
window.addEventListener("load", function(){ if(!window.pageYOffset){ hideAddressBar(); } } );
window.addEventListener("orientationchange", hideAddressBar );
 function BlockMove(event) {
  // Tell Safari not to move the window.
  event.preventDefault() ;
 }
</script>

</head>
<body ontouchmove="BlockMove(event);" >


	