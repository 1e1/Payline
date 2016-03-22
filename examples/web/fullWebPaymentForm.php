<form action="../demos/web.php" method="post" name="fullWebPayment" id="fullWebPayment" class="payline-form">
	<?php
  $displayedPage = 'fullWebPayment';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/order.php';
	include '../fieldset/urls.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/webOptions.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/recurring.php';
	?>
    <fieldset>
    	<h4>Contrats</h4>
    	<div class="row">
            <label for="selectedContract">Selected contract list</label>
            <input type="text" name="selectedContract" id="selectedContract" value="<?php echo CONTRACT_NUMBER_LIST?>" />
            <span class="help">(separator if severals numbers : ";")</span>
		</div>
		<div class="row">
            <label for="secondSelectedContract">Second contract list</label>
            <input type="text" name="secondSelectedContract" id="secondSelectedContract" value="<?php echo SECOND_CONTRACT_NUMBER_LIST?>" />
            <span class="help">(separator if severals numbers : ";")</span>
		</div>
		<div class="row">
			<label for="contractNumberWalletList">Wallet contract list</label>
			<input type="text" name="contractNumberWalletList" id="contractNumberWalletList" value="">
			<span class="help">(separator if severals numbers :	";")</span>
		</div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="fullWebPayment" />
</form>
