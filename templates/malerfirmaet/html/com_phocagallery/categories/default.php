<?php
defined('_JEXEC') or die('Restricted access');
//print_r($this->categories);exit;
?>
<div class="template clearfix">
	<div class="w_content clearfix">
		{module Breadcrumbs}
		<h2 class="title_art"><?php echo $this->category->title_self;?></h2> 
		<?php echo $this->category->description;?>
		{module Gallery Menu}
	</div> <!--w_content-->
</div>