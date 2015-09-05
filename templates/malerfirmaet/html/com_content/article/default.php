<?php
defined('_JEXEC') or die;
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
    include('default_mobile.php');
    return;
}
//Detect mobile end
?>
<div class="template clearfix">
	<div class="main-content clearfix">
		<div class="nav-left">
			{module Arbejdsområder}
		</div>
		<div class="w_content2 clearfix"> 
			{module Breadcrumbs}
			<h2 class="title_art"><?php echo $this->item->title;?></h2>  
			<?php echo $this->item->text;?>
		</div> <!--w_content-->
	</div>
</div>
