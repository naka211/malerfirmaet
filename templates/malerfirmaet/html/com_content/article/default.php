<?php
defined('_JEXEC') or die;
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
