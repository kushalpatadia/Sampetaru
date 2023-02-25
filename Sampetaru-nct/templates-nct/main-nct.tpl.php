<!DOCTYPE html>

<html lang="en">
  <head>
		%HEAD%
	</head>
    <body>
        %SITE_HEADER%      	


<!-- js -->
<script src="{SITE_JS}js/jquery-1.11.1.min.js"></script>
<script src="{SITE_JS}js/scripts.js?v=1.7"></script>
<!-- //js -->
<!-- pop-up-script -->
<script src="{SITE_JS}js/jquery.chocolat.js"></script>
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
    $(function() {
      $('.view-seventh a').Chocolat();
    });
    </script>
<!-- //pop-up-script -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{SITE_JS}js/move-top.js"></script>
<script type="text/javascript" src="{SITE_JS}js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<script src="{SITE_JS}js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{SITE_JS}js/move-top.js"></script>
<script type="text/javascript" src="{SITE_JS}js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
<!--FlexSlider-->
        <link rel="stylesheet" href="{SITE_CSS}flexslider.css" type="text/css" media="screen" />
        <script defer src="{SITE_JS}js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
        </script>
<!--End-slider-script-->
<!-- google place -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.5&sensor=false&libraries=places&language=en&key=AIzaSyBw5IclEhDZDZ6qrXA8iy4h0CxFZwaDhe0"></script>
<script type="text/javascript">
    $(function() {
      var e;
      // var a;
      // car b;
      e = $('.typeahead1')[0];
      return new google.maps.places.Autocomplete(e, {
        types: ["geocode"]
      });
      a = $('start')[0];
      return new google.maps.places.Autocomplete(e, {
        types: ["geocode"]
      });
      // b = $('end')[0];
      // return new google.maps.places.Autocomplete(e, {
      //   types: ["geocode"]
      // });
    });
  </script>
<!-- google place -->
        %BODY%  
        %FOOTER%


      %MESSAGE_TYPE%

    </body>
</html>

