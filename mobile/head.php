<meta charset="utf-8">
<link href="fav.ico" rel="shortcut icon"/>
<meta name="author" content="tho" /> 
<title>Index</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.css" />
<link type="text/css" href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/styles-moblie.css" />     
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- JS -->
<script type='text/javascript' src="js/jquery-1.10.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- JS  MENU Top-Left-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<script defer src="js/jquery.flexslider.js"></script>
<script type='text/javascript' src="js/jquery.easing.js"></script>
<script type='text/javascript' src="js/jquery.mousewheel.js"></script>


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


 

   