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
                <div class="main-content clearfix">
                    <div class="nav-left">
                        <h2>Galleri</h2>
                        <ul>
                            <li><a href="galleri-sproejtearbejde.php">Sprøjtearbejde</a></li>
                            <li><a href="galleri-epoxy-gulve-vaegge.php">Epoxy gulve/vægge</a></li>
                            <li><a href="galleri-kalkning.php">Kalkning</a></li>
                            <li><a href="galleri-indendoers-malerarbejde.php">Indendørs malerarbejde</a></li>
                            <li><a href="galleri-udendoers-malerarbejde.php">Udendørs malerarbejde</a></li>
                            <li class="active"><a href="galleri-moenstret-tapet-fototapet.php">Mønstret tapet/fototapet</a></li>
                        </ul>
                    </div>
                    <div class="w_content2 clearfix"> 
                        <ul class="breakcum">
                            <li><a href="index.php">Forside</a></li>
                            <li><a href="galleri.php">Galleri</a></li>
                            <li><a href="#">Mønstret tapet/fototapet</a></li>
                        </ul>
                        <h2 class="title_art">MØNSTRET TAPET/FOTOTAPET<a href="galleri.php" class="link_back">Tilbage</a></h2> 
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. </p>
                        
                        <?php require_once('slider.php'); ?>
                        
                    </div> <!--w_content-->
                </div>
            </div><!--template-->
        </div><!--#container-->
        <?php require_once('footer.php'); ?> 
    </div> <!--#page--> 
</body>
</html>
