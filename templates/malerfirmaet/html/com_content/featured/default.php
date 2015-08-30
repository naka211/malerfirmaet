<?php
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidator');
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
$tmpl = JURI::base()."templates/malerfirmaet/";
?>
<style>
.invalid {
    border-color: red !important;
}
</style>
<div class="banner">
	<div class="banner_ctn"> {module Home slider} </div>
	<!--banner_ctn--> 
</div>
	<!--banner-->
	
<div class="w_content clearfix">
	<div class="welcom clearfix">
		<h2 class="title_img"><img src="<?php echo $tmpl;?>img/title_welcom.png" alt="Velkommen til Malerfirmaet DLH"></h2>
		{article 4}{text}{/article}
	</div>
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate"> 
		<div class="wrap_form_contact clearfix">
			<h5>Indhent tilbud!</h5>
			<div class="form_contact">
				<input placeholder="Navn *" type="text" class="required" name="jform[contact_name]">
				<input placeholder="E-mail *" type="text" class="required" name="jform[contact_email]">
				<input placeholder="Telefon *" type="text" class="required" name="jform[contact_phone]">
				<textarea placeholder="Besked *" class="required" name="jform[contact_message]"></textarea>
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