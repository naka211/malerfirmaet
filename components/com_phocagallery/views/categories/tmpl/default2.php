<?php
defined('_JEXEC') or die('Restricted access');
?>
<div class="template clearfix">
	<div class="w_content clearfix"> 
		{module Breadcrumbs}
		<h2 class="title_art"><?php echo $this->category->title_self;?></h2> 
		<?php echo $this->category->description;?>
		<ul class="list_galleri">
			<?php foreach($this->categories as $item){?>
			<li>
				<a href="<?php echo $item->link;?>"> <img src="<?php echo $item->linkthumbnailpath;?>" alt=""></a>
				<h6><a href="<?php echo $item->link;?>"><?php echo $item->title_self;?></a></h6>
				<p><?php echo $item->description;?></p>                            
			</li>
			<?php }?>
		</ul> 
	</div> <!--w_content-->
</div>