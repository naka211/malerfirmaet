<?php
defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/malerfirmaet/";

//Detect mobile
//session_start();
$config = JFactory::getConfig();
$showPhone = $config->get( 'show_phone' );
$enablePhone = $config->get( 'enable_phone' );
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if(!isset($_SESSION['mobile'])){
	if($detect->isMobile()){
		$_SESSION['mobile'] = true;
	}
}
if($showPhone){
	$_SESSION['mobile'] = $showPhone;
}
if ( ($showPhone || $detect->isMobile()) && ($enablePhone) && ($_SESSION['mobile'])) {
    include('index_mobile.php');
    return;
}
//Detect mobile end
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<jdoc:include type="head" />

	<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/reset.css">
	<link type="text/css" href="<?php echo $tmpl;?>font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $tmpl;?>css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/styles.css">
	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery-1.10.2.min.js"></script>
	<!--JS camera-->

	<script>window.jQuery || document.write('<script src="<?php echo $tmpl;?>js/libs/jquery-1.7.min.js">\x3C/script>')</script>
	<script defer src="<?php echo $tmpl;?>js/jquery.flexslider.js"></script>
	<script src="<?php echo $tmpl;?>js/jquery.easing.js"></script>
	<script src="<?php echo $tmpl;?>js/jquery.mousewheel.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
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
	<script type="text/javascript">	
		jQuery(document).ready(function () {		
			setTimeout(function(){
			    jQuery('.banner_01 .box_hidden').addClass('show-top');
			},500);
			//Show Box 1
		});
	</script>
	<script type="text/javascript">	
		jQuery(document).ready(function () {
			
			setTimeout(function(){
			    jQuery('.box_hidden').removeClass('show-top');
				jQuery('.banner_02  .box_hidden').addClass('show-top');
			},5000);
			//Show Box 2
			//jQuery('.box1>.hidden-wrapper').removeClass('show-top');
		});
	</script>
	<script type="text/javascript">	
		jQuery(document).ready(function () {		
			
			setTimeout(function(){
				jQuery('.box_hidden').removeClass('show-top');
			    jQuery('.banner_03 .box_hidden').addClass('show-top');
			},10000);
			//Show Box 3
			//jQuery('.box2>.hidden-wrapper').removeClass('show-top');
		});
	</script>
	<script type="text/javascript">	
		jQuery(document).ready(function () {		
			setTimeout(function(){
			   jQuery('.box_hidden').removeClass('show-top');
			},15000);
			// Hide All Box		
		});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('input').on('change invalid', function() {
			var textfield = jQuery(this).get(0);
			textfield.setCustomValidity('');
			
			if (!textfield.validity.valid) {
			  textfield.setCustomValidity('Udfyld dette felt');  
			}
		});
		
		jQuery(".item-126 .sub>li>a").append('<i class="fa fa-angle-right fa-lg fr cfff"></i>');
	});
	</script>
</head>
<body>
<div id="page" class="clearfix">
<header class="clearfix">
	<div class="w_content top_head clearfix">
		<h1 class="logo" ><a href="<?php echo JURI::base();?>" title="malerfirmaet-dlh"><img src="<?php echo $tmpl;?>img/logo.png" alt=""></a></h1>
	</div>
	<!--top_head-->
	<div class="menu_bar clearfix">
		<div class="ctn_menu">
			{module Home Menu}
			
			<div class="shadow_header"></div>
		</div>
	</div>
		<!--menu_bar--> 
</header>
<div id="container" class="clearfix">
	<jdoc:include type="component" />
</div>
<!--#container-->
<footer class="clearfix">
	<div class="w_content clearfix">
		{article 5}{text}{/article}
		<p class="link_mwc">Design by <a href="http://www.mywebcreations.dk/" target="_blank">My Web Creations</a></p>
	</div>
<!--w-content-->
</footer>
</div>
<!--#page-->
</body>
</html>