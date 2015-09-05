<?php
defined('_JEXEC') or die;
?>
<div class="template clearfix">
	<div class="nav-left">
		{module Arbejdsområder}
	</div>
	<div class="w_content clearfix">
		<h2 class="title_art"><?php echo $this->item->title;?></h2>  
		<?php echo $this->item->text;?>

		<a class="btn_kontakt" href="index.php?option=com_contact&view=contact&id=1&Itemid=130">KONTAKT OS FOR YDERLIGERE INFORMATIONER</a>
	</div> <!--w_content-->
</div>
