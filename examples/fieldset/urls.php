<fieldset>
	<h4>Web payment URL's</h4>
	<div class="row">
		<label for="notificationURL">Notification url</label>
		<input type="text" name="notificationURL" id="notificationURL" value="<?php echo NOTIFICATION_URL?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
	<div class="row">
		<label for="returnURL">Return url</label>
		<input type="text" name="returnURL" id="returnURL" value="<?php echo RETURN_URL?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
	<div class="row">
		<label for="cancelURL">Cancel url</label>
		<input type="text" name="cancelURL" id="cancelURL" value="<?php echo CANCEL_URL?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
</fieldset>			