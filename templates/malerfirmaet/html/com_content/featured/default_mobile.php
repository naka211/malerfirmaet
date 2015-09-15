<?php
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidator');
$tmpl = JURI::base().'templates/malerfirmaet/mobile/';
?>
<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.h5validate.js"></script>
<script>
jQuery(document).ready(function () {
    jQuery('form').h5Validate();
});
</script>
<style>
.invalid {
    border-color: red !important;
}
</style>
<div class="banner_box clearfix">
	<div id="banner" class="clearfix">
		{module Home slider}
	</div>
	<!--#banner--> 
</div>

<div class="w_content clearfix">
	<div class="welcom clearfix">
		<h2 class="title_img"><span class="c_black">Velkommen til</span><span class="c_blue"> Malerfirmaet DLH</span></h2>
		{article 4}{text}{/article}
	</div>
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<div class="wrap_form_contact clearfix">
			<h5>Indhent tilbud!</h5>
			<div class="form_contact">
				<input placeholder="Navn *" type="text" class="required" name="jform[contact_name]">
				<input placeholder="E-mail *" type="text" class="required" name="jform[contact_email]">
				<input placeholder="Telefon *" type="text" class="required" name="jform[contact_phone]">
				<textarea placeholder="Besked" class="required" name="jform[contact_message]"></textarea>
				<p>Felter markeret * skal udfyldes</p>
			</div>
			<!--<a href="#" class="btn_send">Send</a>-->
			<button class="btn_send validate" style="cursor:pointer;">Afsend</button>
		</div>
		<input type="hidden" name="option" value="com_contact" />
		<input type="hidden" name="task" value="contact.submit" />
		<input type="hidden" name="id" value="1" />
		<?php echo JHtml::_('form.token'); ?>
	</form>
	<!--wrap_form_contact--> 
	
</div>