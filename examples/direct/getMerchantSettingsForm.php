<?php
$displayedPage = 'getMerchantSettings';
$defaultLogoPath = dirname(dirname(dirname(__FILE__)));
$defaultLogoPath .= DIRECTORY_SEPARATOR.paylineSDK::DEFAULT_LOGO_DIR.DIRECTORY_SEPARATOR.MERCHANT_ID.DIRECTORY_SEPARATOR;
?>
<form action="../demos/direct.php" method="post" class="payline-form">
	<?php include '../fieldset/version.php';?>
	<input type="submit" name="submit" class="submit" value="getMerchantSettings">
	<span class="help">Payline API function</span>
</form>
<form action="../demos/direct.php" method="post" class="payline-form">
	<?php include '../fieldset/version.php';?>
	<div class="row">
		<label for="logoPath">Custom logo download path</label>
		<input type="text" name="logoPath" id="logoPath" value="<?php echo $defaultLogoPath?>" />
		<span class="help">custom logo will be downloaded under this path</span>
	</div>
	<input type="hidden" name="getMerchantSettingsToArray" value="1">
	<br/>
	<input type="submit" name="submit" class="submit" value="getMerchantSettings">
	<span class="help">PHP kit function. Download custom logos and returns an associative array</span>
</form>
