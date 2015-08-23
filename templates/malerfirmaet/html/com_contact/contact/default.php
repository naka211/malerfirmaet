<?php
defined('_JEXEC') or die;
JHtml::_('behavior.formvalidator');
?>
<div class="template clearfix">
	<div class="w_content clearfix"> 
		<h2 class="title_art">Kontakt</h2> 
		<div class="form_kontakt"> 
			<p><b>Kontakt os ved at sende en besked via formularen nedenfor</b></p>
			<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">                      
				<input class="txtInput required" placeholder="Navn *" type="text" name="jform[contact_name]">
				<input class="txtInput required" placeholder="E-mail *" type="text" name="jform[contact_email]">
				<input class="txtInput required" placeholder="Telefon *" type="text" name="jform[contact_phone]">
				<textarea class="txtArea required" placeholder="Besked *" name="jform[contact_message]"></textarea>
				<div class="w_btn clearfix">
					<!--<a href="#" class="btn_gem">Afsend</a>-->
					<button class="btn_gem validate" style="cursor:pointer;">Afsend</button>
					<span class="sp_note">Felter markeret * skal udfyldes</span>                            
				</div>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</form>
		</div> <!--form_kontakt-->
		<div class="form_info"> 
			{article 16}{text}{/article}                       
		</div> <!--form_info-->
	</div> <!--w_content-->
</div>