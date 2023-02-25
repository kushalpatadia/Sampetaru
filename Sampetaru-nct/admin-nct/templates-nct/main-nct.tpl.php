<!DOCTYPE html>

<html lang="en">
  <head>
		%HEAD%
	</head>
    <body>
      	%SITE_HEADER%
        %BODY%  
        %FOOTER%
            




    <!-- Javascript Files
    ================================================== -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--js-->
    <!--Icons-->
    <script src="{SITE_ADM_JS}lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="{SITE_ADM_JS}html5shiv.js"></script>
    <script src="{SITE_ADM_JS}respond.min.js"></script>
    <![endif]-->
    <script src="{SITE_ADM_JS}jquery-1.11.1.min.js"></script>
    <script src="{SITE_ADM_JS}bootstrap.min.js"></script>
    <script src="{SITE_ADM_JS}chart.min.js"></script>
    <script src="{SITE_ADM_JS}chart-data.js"></script>
    <script src="{SITE_ADM_JS}easypiechart.js"></script>
    <script src="{SITE_ADM_JS}easypiechart-data.js"></script>
    <script src="{SITE_ADM_JS}bootstrap-datepicker.js"></script>
    <script src="{SITE_ADM_JS}bootstrap-table.js"></script>
    <script src="{SITE_ADM_JS}login.js"></script>

    <script>
      $('#calendar').datepicker({
      });

      !function ($) {
          $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
              $(this).find('em:first').toggleClass("glyphicon-minus");      
          }); 
          $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
      }(window.jQuery);

      $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
      })
      $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
      })
    </script>

      %MESSAGE_TYPE%
    </body>
</html>

