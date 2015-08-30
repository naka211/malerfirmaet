 <!doctype html>
<html>
<head>
    <?php require_once('head.php'); ?>
</head>
<body>
    <div id="page" class="clearfix">
        <?php $t = 8; require_once('header.php'); ?>
        <div id="container" class="clearfix"> 
            <div class="template clearfix">
                <div class="w_content clearfix"> 
                    <h2 class="title_art">Kontakt</h2> 
                    <div class="form_kontakt"> 
                        <p><b>Kontakt os ved at sende en besked via formularen nedenfor</b></p>                        
                        <input class="txtInput" placeholder="Navn *" type="text">
                        <input class="txtInput" placeholder="E-mail *" type="text">
                        <input class="txtInput" placeholder="Telefon *" type="text">
                        <input class="txtInput" placeholder="Postnr. og by: " type="text">  
                        <textarea class="txtArea" placeholder="Besked"></textarea>
                        <div class="w_btn clearfix">
                            <a href="#" class="btn_gem">Afsend</a>
                            <span class="sp_note">Felter markeret * skal udfyldes</span>                            
                        </div>
                    </div> <!--form_kontakt-->
                    <div class="form_info"> 
                        <p>David og Louise er begge uddannet bygningsmalere. David er udlært d. 31-12-1998, og Louise er udlært d. 8-9-1999.</p>
                        <div class="team clearfix">
                            <div class="col_info info_01">
                                <div class="w_picture"><img src="img/picture_01.png" alt="" class="img-circle center-block"></div>
                                <h4>David</h4>
                                <span>Tlf: 6165 8480</span>
                                <a href="mailto:davidhaakonsen@yahoo.dk">davidhaakonsen@yahoo.dk </a> 
                            </div>
                             <div class="col_info info_02">
                                <div class="w_picture"><img src="img/picture_02.png" alt="" class="img-circle center-block"></div>
                                <h4>Louise</h4>
                                <span>Tlf: 2616 1690</span> 
                            </div>
                        </div>                        
                    </div> <!--form_info-->
                </div> <!--w_content-->
            </div><!--template-->
        </div><!--#container-->
        <?php require_once('footer.php'); ?> 
    </div> <!--#page--> 
</body>
</html>
