 <!doctype html>
<html>
<head>
    <?php require_once('head.php'); ?>
</head>
<body>
    <div id="page" class="clearfix">
        <?php $t = 4; require_once('header.php'); ?>
        <div id="container" class="clearfix"> 
            <div class="template clearfix">
                <?php require_once('nav-breadcrumb2.php'); ?>
                <div class="w_content clearfix"> 
                    <h2 class="title_art">UDENDØRS MALERARBEJDE<a href="galleri.php" class="link_back">Tilbage</a></h2> 
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </p>
                    
                   <?php require_once('slider.php'); ?>
                    
                </div> <!--w_content-->
            </div><!--template-->
        </div><!--#container-->
        <?php require_once('footer.php'); ?> 
    </div> <!--#page--> 
</body>
</html>
