<fieldset>
	<h4>Options</h4>
	<div class="row">
		<label for="languageCode">Language Code</label>
		<select	name="languageCode" id="languageCode"> 
			<option value="">- browser language -</option>
			<option value="fr">fran&ccedil;ais</option>
			<option value="de">deutsh</option>
			<option value="en">english</option>
			<option value="ita">italiano</option>
			<option value="es">espa&ntilde;ol</option>   
			<option value="pt">portugu&ecirc;s</option>
		</select>
	</div>
	<div class="row">
		<label for="customPaymentPageCode">Custom payment page code</label>
		<input type="text" name="customPaymentPageCode" id="customPaymentPageCode" value="<?php echo CUSTOM_PAYMENT_PAGE_CODE?>">
	</div>
	<div class="row">
		<label for="customPaymentTemplateURL">Custom template URL</label>
		<input type="text" name="customPaymentTemplateURL" id="customPaymentTemplateURL" value="">
	</div>
	<div class="row">
		<label for="securityMode">Security mode</label>
		<input type="text" name="securityMode" id="securityMode" value="">
	</div>
</fieldset>