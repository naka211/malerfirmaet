 <!doctype html>
<html>
<head>
    <?php require_once('head.php'); ?>
</head>
<body>
    <div id="page" class="clearfix">
        <?php $t = 2; require_once('header.php'); ?>
        <div id="container" class="clearfix"> 
            <div class="template clearfix">
                <div class="main-content clearfix">
                    <div class="nav-left">
                        <h2>Arbejdsområder</h2>
                        <?php require_once('nav-left.php'); ?>
                    </div>
                    <div class="w_content2 clearfix"> 
                        <ul class="breadcrumb">
                            <li><a href="index.php">Hjem <i class="fa fa-angle-right fa-lg"></i></a></li>
                            <li><a href="malerarbejde.php">Arbejdsområder <i class="fa fa-angle-right fa-lg"></i></a></li>
                            <li class="active">Kalkning</li>
                        </ul>
                        <h2 class="title_art">KALKNING</h2>                                           
                        <p><a href="galleri-kalkning.php">Her kan du se vores arbejde med kalkning</a></p>

                        <a class="btn_kontakt" href="kontakt.php">KONTAKT OS FOR YDERLIGERE INFORMATIONER</a>
                    </div> <!--w_content-->
                </div>
            </div><!--template-->
        </div><!--#container-->
        <?php require_once('footer.php'); ?> 
    </div> <!--#page--> 
</body>
</html>
