<meta charset="utf-8">
<link href="images/fav.ico" rel="shortcut icon"/>
<meta name="description" content="">
<meta name="author" content="tho">
<link href="fav.ico" rel="shortcut icon" />
<title> Malerfirmaet-dlh </title>
 
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link type="text/css" href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/styles.css">  
 
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> 
<!--JS camera-->
<!-- <script type='text/javascript' src='js/jquery.min.js'></script>  -->
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.js'></script>    -->

<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>


<script>
    // jQuery(function(){                            
    //     jQuery('#camera_wrap_2').camera({
    //         height: '550px', 
    //         pagination: false,
    //         thumbnails: true,

    //     });
    // });
</script>

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
