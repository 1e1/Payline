<form action="../index/updateConfig.php" method="post" class="payline-form">
	<fieldset>
		<div class="row">
			<label for="MERCHANT_ID">Merchant ID</label>
			<input type="text" name="MERCHANT_ID" id="MERCHANT_ID" value="<?php echo MERCHANT_ID?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="ACCESS_KEY">Access key</label>
			<input type="text" name="ACCESS_KEY" id="ACCESS_KEY" value="<?php echo ACCESS_KEY?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="ACCESS_KEY_REF">web2token ref.</label>
			<input type="text" name="ACCESS_KEY_REF" id="ACCESS_KEY_REF" value="<?php echo ACCESS_KEY_REF?>"/>
		</div>
		<div class="row">
			<label for="ENVIRONMENT">Environment</label>
			<select name="ENVIRONMENT" id="ENVIRONMENT">
				<option value="<?php echo paylineSDK::ENV_HOMO?>" <?php if(ENVIRONMENT == paylineSDK::ENV_HOMO) echo "selected='true'"?>><?php echo paylineSDK::ENV_HOMO?></option>
				<option value="<?php echo paylineSDK::ENV_PROD?>" <?php if(ENVIRONMENT == paylineSDK::ENV_PROD) echo "selected='true'"?>><?php echo paylineSDK::ENV_PROD?></option>
			</select>
		</div>
		<div class="row">
			<label for="PROXY_HOST">Proxy Host</label>
			<input type="text" name="PROXY_HOST" id="PROXY_HOST" value="<?php echo PROXY_HOST?>"/>
		</div>
		
		<div class="row">
			<label for="PROXY_PORT">Proxy Port</label>
			<input type="text" name="PROXY_PORT" id="PROXY_PORT" value="<?php echo PROXY_PORT?>"/>
		</div>
		
		<div class="row">
			<label for="PROXY_LOGIN">Proxy login</label>
			<input type="text" name="PROXY_LOGIN" id="PROXY_LOGIN" value="<?php echo PROXY_LOGIN?>"/>
		</div>
		
		<div class="row">
			<label for="PROXY_PASSWORD">Proxy password</label>
			<input type="text" name="PROXY_PASSWORD" id="PROXY_PASSWORD" value="<?php echo PROXY_PASSWORD?>"/>
		</div>
		<div class="row">
			<label for="WS_VERSION">Version</label>
			<input type="text" name="WS_VERSION" id="WS_VERSION" value="<?php echo WS_VERSION?>"/>
		</div>
		<div class="row">
			<label for="CONTRACT_NUMBER">Contrat number</label>
			<input type="text" name="CONTRACT_NUMBER" id="CONTRACT_NUMBER" value="<?php echo CONTRACT_NUMBER?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="CONTRACT_NUMBER_LIST">Main contract list</label>
			<input type="text" name="CONTRACT_NUMBER_LIST" id="CONTRACT_NUMBER_LIST" value="<?php echo CONTRACT_NUMBER_LIST?>"/>
		</div>
		<div class="row">
			<label for="SECOND_CONTRACT_NUMBER_LIST">Second contract list</label>
			<input type="text" name="SECOND_CONTRACT_NUMBER_LIST" id="SECOND_CONTRACT_NUMBER_LIST" value="<?php echo SECOND_CONTRACT_NUMBER_LIST?>"/>
		</div>
		<div class="row">
			<label for="PAYMENT_CURRENCY">Payment currency</label>
			<input type="text" name="PAYMENT_CURRENCY" id="PAYMENT_CURRENCY" value="<?php echo PAYMENT_CURRENCY?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="ORDER_CURRENCY">Order currency</label>
			<input type="text" name="ORDER_CURRENCY" id="ORDER_CURRENCY" value="<?php echo ORDER_CURRENCY?>"/>
			<span class="help">(required)</span>
		</div>
		
		<div class="row">
			<label for="PAYMENT_ACTION">Payment action</label>
			<input type="text" name="PAYMENT_ACTION" id="PAYMENT_ACTION" value="<?php echo PAYMENT_ACTION?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="PAYMENT_MODE">Payment mode</label>
			<input type="text" name="PAYMENT_MODE" id="PAYMENT_MODE" value="<?php echo PAYMENT_MODE?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="LANGUAGE_CODE">Language code</label>
			<input type="text" name="LANGUAGE_CODE" id="LANGUAGE_CODE" value="<?php echo LANGUAGE_CODE?>"/>
		</div>
		<div class="row">
			<label for="SECURITY_MODE">Security mode</label>
			<input type="text" name="SECURITY_MODE" id="SECURITY_MODE" value="<?php echo SECURITY_MODE?>"/>
		</div>
		<div class="row">
			<label for="CUSTOM_PAYMENT_TEMPLATE_URL">Template URL</label>
			<input type="text" name="CUSTOM_PAYMENT_TEMPLATE_URL" id="CUSTOM_PAYMENT_TEMPLATE_URL" value="<?php echo CUSTOM_PAYMENT_TEMPLATE_URL?>"/>
		</div>
		<div class="row">
			<label for="CUSTOM_PAYMENT_PAGE_CODE">Custom page code</label>
			<input type="text" name="CUSTOM_PAYMENT_PAGE_CODE" id="CUSTOM_PAYMENT_PAGE_CODE" value="<?php echo CUSTOM_PAYMENT_PAGE_CODE?>"/>
		</div>
		<div class="row">
			<label for="RETURN_URL">Return URL</label>
			<input type="text" name="RETURN_URL" id="RETURN_URL" value="<?php echo RETURN_URL?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="CANCEL_URL">Cancel URL</label>
			<input type="text" name="CANCEL_URL" id="CANCEL_URL" value="<?php echo CANCEL_URL?>"/>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="NOTIFICATION_URL">Notification URL</label>
			<input type="text" name="NOTIFICATION_URL" id="NOTIFICATION_URL" value="<?php echo NOTIFICATION_URL?>"/>
		</div>
	</fieldset>
	
		<input type="submit" name="submit" id="submit" class="submit" value="Sauvegarder"/>
</form>