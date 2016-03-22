<form action="../demos/web.php" method="post" class="payline-form">
	<fieldset>
		<h4>Do Web Payment minimal informations</h4>
		<div class="row">
			<label for="ref">Order reference</label>
			<input type="text" name="ref" id="ref" value="<?php echo 'PHP-'.time()?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="amount">Amount</label>
			<input type="text" name="amount" id="amount" value="33300">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="currency">Currency</label>
			<select name="currency" id="currency">
			 <option value="978">EURO (EUR)</option>
			 <option value="840">US DOLLAR (USD)</option>
			 <option value="756">FRANC SUISSE (CHF)</option>
			 <option value="826">STERLING (GBP)</option>
			 <option value="124">CANADIAN DOLLAR (CAD)</option>
			</select>
		</div>
		<div class="row">
			<label for="debug">MODE DEBUG</label>
			<input type="checkbox" name="debug" id="debug" value="YES">
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="doWebPayment">
</form>
