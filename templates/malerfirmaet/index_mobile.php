<?php
defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/malerfirmaet/mobile/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<jdoc:include type="head" />
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo $tmpl;?>css/jquery.mmenu.css" />
<link type="text/css" href="<?php echo $tmpl;?>font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $tmpl;?>css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="<?php echo $tmpl;?>css/styles-moblie.css" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- JS -->
<script type='text/javascript' src="<?php echo $tmpl;?>js/jquery-1.10.2.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $tmpl;?>js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- JS  MENU Top-Left-->
<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.mmenu.min.all.js"></script>
<script defer src="<?php echo $tmpl;?>js/jquery.flexslider.js"></script>
<script type='text/javascript' src="<?php echo $tmpl;?>js/jquery.easing.js"></script>
<script type='text/javascript' src="<?php echo $tmpl;?>js/jquery.mousewheel.js"></script>
<script type="text/javascript"> 
    // forsub .....
        $(function() { 
            $('nav#menu-left').mmenu({
                    slidingSubmenus: false
            });
        });
</script>
<script type="text/javascript">
    $(window).load(function(){
      $('#banner').flexslider({
          animation: "slide"
        });

      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 160,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
</head>
<body>
<div id="page" class="clearfix">
<div id="header" class="mm-fixed-top">
	<div id="logo" class="clearfix"> <a href="<?php echo JURI::base();?>" class="divlogo"><img src="<?php echo $tmpl;?>img/logo.png"></a></div>
	<div class="w_bntMenuleft clearfix"><a href="#menu-left" class="bntMenuleft"><img src="<?php echo $tmpl;?>images/bntMenuleft.png"></a> </div>
</div>
<nav id="menu-left">
	<div class="divWrapAll"> <a href="<?php echo JURI::base();?>" class="divlogomn"><img src="<?php echo $tmpl;?>img/logo.png"></a>
		{module Home Menu}
	</div>
</nav>
<!--class: nav-left-active-->
<div id="container" class="clearfix">
	<jdoc:include type="component" />
	<!--w_content--> 
</div>
<!--#container-->
<footer class="clearfix">
<div class="w_content clearfix">
	{article 5}{text}{/article}
	<p class="link_mwc">Design by <a href="http://www.mywebcreations.dk/" target="_blank">My Web Creations</a></p>
</div>
<!--w-content-->
</div>
<script>
      jQuery(function(){   
        // camera Galleri page for mobile
          jQuery('#camera_wrap_2').camera({
            height: '250px', 
            pagination: false,
            thumbnails: true
          });
      }); 
    </script>
</div>
<!--#page-->
</body>
</html>