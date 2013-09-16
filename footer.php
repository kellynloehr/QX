 
<!-- Site Footer -->      
      <footer class="clearfix" id="siteinfo">
        	      </footer>

    </div> <!-- /container -->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='js/swipe.js'></script>
<script src='js/cookie.js'></script>

<script>
$('.box').addClass('.l-red');

// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
  // startSlide: 4,
  // auto: 3000,
  // continuous: true,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
});

// with jQuery
// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');


$.ajaxSetup({
    cache: false
});

$(".start").click(function () {
$("body").hide();
    var loadUrl = "index.php";
     $("body").load(loadUrl).fadeIn(2000);
});
$.ajaxSetup({
    cache: false
});

$(".info").click(function () {
$("body").hide();
    var loadUrl = "intro.php";
     $("body").load(loadUrl).fadeIn(2000);
});


 </script>