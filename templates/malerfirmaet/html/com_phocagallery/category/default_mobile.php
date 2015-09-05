<?php
defined('_JEXEC') or die('Restricted access'); 
//print_r($this->items);exit;
unset($this->items[0]);
?>

<div class="template clearfix">
	<div class="main-content clearfix">
		<div class="nav-left">
			{module Left Gallery Menu}
		</div>
		<div class="w_content clearfix">
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
