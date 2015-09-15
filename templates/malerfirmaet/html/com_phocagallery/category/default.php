<?php
defined('_JEXEC') or die('Restricted access'); 
//print_r($this->items);exit;
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
unset($this->items[0]);
?>

<div class="template clearfix">
	<div class="main-content clearfix">
		<div class="nav-left">
			{module Left Gallery Menu}
		</div>
		<div class="w_content2 clearfix">
			{module Breadcrumbs}
			<h2 class="title_art"><?php echo $this->category->title;?> <a href="javascript:history.back()" class="link_back">Tilbage</a></h2>
			<p><?php echo $this->category->description;?></p>
			<section class="slider">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<?php foreach($this->items as $item){?>
						<li> <img src="images/phocagallery/<?php echo $item->filename;?>" /> </li>
						<?php }?>
					</ul>
				</div>
				<div id="carousel" class="flexslider">
					<ul class="slides">
						<?php foreach($this->items as $item){?>
						<li> <img src="images/phocagallery/<?php echo $item->filename;?>" /> </li>
						<?php }?>						
					</ul>
				</div>
			</section>
		</div>
		<!--w_content--> 
	</div>
</div>
