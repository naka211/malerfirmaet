<?php
defined('_JEXEC') or die;
$i = 1;
?>
<?php foreach($list as $item){
$images = json_decode($item->images);
$urls = json_decode($item->urls);
?>
<div class="eachBanner banner_0<?php echo $i;?>">
	<div class="wrap_box_hidden"> <img class="img_bn" src="<?php echo $images->image_intro;?>">
			<div class="box_hidden">
			<h3><a href="<?php echo $urls->urla;?>"><?php echo $item->introtext;?></a></h3>
			<p><?php echo $item->fulltext;?></p>
		</div>
		</div>
	<h2><a href="<?php echo $urls->urla;?>"> <?php echo $item->title;?></a></h2>
</div>
<?php $i++;}?>