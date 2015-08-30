<?php
defined('_JEXEC') or die;
?>
<ul class="slides">
	<?php foreach($list as $item){
	$images = json_decode($item->images);
	$urls = json_decode($item->urls);
	?>
	<li> <img src="<?php echo $images->image_intro;?>" />
		<div class="flex-caption">
			<h2><a href="<?php echo $urls->urla;?>"> <?php echo $item->title;?></a></h2>
			<h3><a href="<?php echo $urls->urla;?>"> <?php echo $item->introtext;?></a></h3>
			<p><?php echo $item->fulltext;?></p>
		</div>
	</li>
	<?php }?>
</ul>