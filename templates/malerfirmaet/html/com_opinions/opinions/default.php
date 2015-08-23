<?php
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidator');
$editor = JFactory::getEditor();
?>
<style>
.toggle-editor {
    display: none;
}
</style>
<div class="template clearfix">
	<div class="w_content clearfix">
		<h2 class="title_art">UDTALELSER OM MALERARBEJDE</h2>
		<script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'clean',
			lang : 'da'
		};
		</script>
		<form method="post" action="<?php echo JURI::base();?>index.php" class="form-validate">
		<div class="form_ipinions">
			<input class="txtInput required" placeholder="Navn *" type="text" name="name">
			<input class="txtInput required" placeholder="E-mail *" type="text" name="email">
			<!--<textarea class="txtArea required" placeholder="Indlæg *" name="opinion"></textarea>-->
			<div style="margin-bottom:10px;">Indlæg *</div>
			<?php echo $editor->display( 'opinion', '', '300', '200', '1', '1', false);?>
			<div style="height:10px;"></div>
			<?php
			  require_once('recaptchalib.php');
			  $publickey = "6LehjgMTAAAAANt2O-hrqTtVEd9q_3n-ZwZ7nfWX"; // you got this from the signup page
			  echo recaptcha_get_html($publickey);
			?>
			<div class="w_btn clearfix" style="margin-top:10px;"><button type="submit" class="validate btn_gem" style="cursor:pointer;">Gem indlæg</button> <span class="sp_note">Felter markeret * skal udfyldes</span> </div>
		</div>
		<input type="hidden" name="option" value="com_opinions" />
		<input type="hidden" name="task" value="opinions.addOpinion" />
		</form>
		<?php foreach ($this->items as $item){?>
		<table cellpadding="0" cellspacing="0" style="width:100%; margin:5px 0 0 0;">
			<tbody>
				<tr>
					<td style="padding:5px; background-color:#F7F7F7; border-bottom:1px solid #999999;"><div style="float:left; color:#000000;"><span style="color:#333333; font-size:12px; font-weight:bold;"><?php echo $item->name;?></span>&nbsp;&nbsp;(<a style="font-size:12px;" href="mailto:<?php echo $item->email;?>"><?php echo $item->email;?></a>)</div>
						<div style="float:right; text-align:right; color:#000000;"><span style="color:#000000; font-size:12px; font-weight:bold;">Tilføjet d.</span> <span style="color:#000000; font-size:12px;"><?php echo date("d-m-Y", $item->checked_out);?></span></div></td>
				</tr>
				<tr>
					<td style="padding:10px; border-bottom:1px solid #DADADA; color:#000000;">
					<?php echo $item->message;?>
					</td>
				</tr>
			</tbody>
		</table>
		<?php }?>
		<a class="btn_kontakt" href="index.php?option=com_contact&view=contact&id=1&Itemid=130">KONTAKT OS FOR YDERLIGERE INFORMATIONER</a> </div>
	<!--w_content--> 
</div>
