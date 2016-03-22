<?php
$sampleBuyerData = array(
	0 => array(
		'buyerTitle' => 'M',
		'buyerLastName' => 'DOE',
		'buyerFirstName' => 'John',
		'buyerEmail' => 'johndoe@yopmail.com',
		'billingAddressTitle' => 'M',
		'billingAddressFirstName' => 'John',
		'billingAddressLastName' => 'DOE',
		'billingAddressName' => 'Monext',
		'billingAddressStreet1' => '260, rue Claude Nicolas Ledoux',
		'billingAddressStreet2' => "Pole d'Activites d'Aix-en-Provence",
		'billingAddressCounty' => '',
		'billingAddressCity' => 'Aix-en-Provence Cedex 3',
		'billingAddressZipCode' => '13593',
		'billingAddressCountry' => 'France',
		'billingAddressState' => '',
		'billingAddressPhoneType' => 0,
		'billingAddressPhone' => '0442000000',
		'shippingAddressTitle' => 'Mme',
		'shippingAddressFirstName' => 'Jane',
		'shippingAddressLastName' => 'DOE',
		'shippingAddressName' => 'Home',
		'shippingAddressStreet1' => "7 place de l'Eglise",
		'shippingAddressStreet2' => '',
		'shippingAddressCounty' => '5ème arr.',
		'shippingAddressCity' => 'Marseille',
		'shippingAddressZipCode' => '13005',
		'shippingAddressCountry' => 'France',
		'shippingAddressState' => '',
		'shippingAddressPhoneType' => 0,
		'shippingAddressPhone' => '0491000000',
		'buyerAccountCreateDate' => '10/02/09',
		'buyerAverageAmount' => '3609',
		'buyerOrderCount' => '15',
		'buyerWalletId' => 'W_JohnDOE_20090210',
		'mobilePhone' => '0600000000',
		'customerId' => 'JohnDOE_20090210',
		'birthDate' => '1980-01-20',
		'fingerprintID' => '65w4765xf45qs4fmjslgkj354q354'
	),
  	1 => array(
		'buyerTitle' => 'Mlle',
		'buyerLastName' => 'BELLE',
		'buyerFirstName' => 'Iza',
		'buyerEmail' => 'iza.belle@yopmail.com',
		'billingAddressTitle' => 'Mlle',
		'billingAddressFirstName' => 'Iza',
		'billingAddressLastName' => 'BELLE',
		'billingAddressName' => 'Monext',
		'billingAddressStreet1' => '5, Place de la Pyramide',
		'billingAddressStreet2' => 'Tour Ariane',
		'billingAddressCounty' => 'La Defense',
		'billingAddressCity' => 'PARIS LA DEFENSE - CEDEX',
		'billingAddressZipCode' => '92088',
		'billingAddressCountry' => 'France',
		'billingAddressState' => '',
		'billingAddressPhone' => '0141000000',
		'shippingAddressTitle' => 'Mlle',
		'shippingAddressFirstName' => 'Iza',
		'shippingAddressLastName' => 'BELLE',
		'shippingAddressName' => 'Maison',
		'shippingAddressStreet1' => "4 impasse d'aval",
		'shippingAddressStreet2' => '',
		'shippingAddressCounty' => '',
		'shippingAddressCity' => 'Argenteuil ',
		'shippingAddressZipCode' => '95100',
		'shippingAddressCountry' => 'France',
		'shippingAddressState' => '',
		'shippingAddressPhone' => '0142000000',
		'buyerAccountCreateDate' => '25/09/11',
		'buyerAverageAmount' => '5512',
		'buyerOrderCount' => '9',
		'buyerWalletId' => 'W_IzaBELLE_20110925',
		'mobilePhone' => '0600000001',
		'customerId' => 'IzaBELLE_20110925',
		'birthDate' => '1985-05-15',
		'fingerprintID' => '454321sr4pojqpodfip8qer78'
	)
);
$sampleBuyerIndex = rand (0, sizeof($sampleBuyerData)-1);

?>
<script type="text/javascript">
	function clearSampleBuyer(){
		document.getElementById('buyerTitle').value= '';
		document.getElementById('buyerLastName').value= '';
		document.getElementById('buyerFirstName').value= '';
		document.getElementById('buyerEmail').value= '';
		document.getElementById('billingAddressTitle').value= '';
		document.getElementById('billingAddressFirstName').value= '';
		document.getElementById('billingAddressLastName').value= '';
		document.getElementById('billingAddressName').value= '';
		document.getElementById('billingAddressStreet1').value= '';
		document.getElementById('billingAddressStreet2').value= '';
		document.getElementById('billingAddressCity').value= '';
		document.getElementById('billingAddressZipCode').value= '';
		document.getElementById('billingAddressCountry').value= '';
		document.getElementById('billingAddressState').value= '';
		document.getElementById('billingAddressPhone').value= '';
		document.getElementById('shippingAddressTitle').value= '';
		document.getElementById('shippingAddressFirstName').value= '';
		document.getElementById('shippingAddressLastName').value= '';
		document.getElementById('shippingAddressName').value= '';
		document.getElementById('shippingAddressStreet1').value= '';
		document.getElementById('shippingAddressStreet2').value= '';
		document.getElementById('shippingAddressCity').value= '';
		document.getElementById('shippingAddressZipCode').value= '';
		document.getElementById('shippingAddressCountry').value= '';
		document.getElementById('shippingAddressState').value= '';
		document.getElementById('shippingAddressPhone').value= '';
		document.getElementById('buyerAccountCreateDate').value= '';
		document.getElementById('buyerAverageAmount').value= '';
		document.getElementById('buyerOrderCount').value= '';
		document.getElementById('buyerWalletId').value= '';
		document.getElementById('mobilePhone').value= '';
		document.getElementById('customerId').value= '';
	}
</script>

<fieldset>
	<h4>Informations about buyer</h4>
	<div class="row">
		<label for="buyerLegalStatus">Legal status</label>
		<select	name="buyerLegalStatus" id="buyerLegalStatus">
			<option value="1">1 (Person)</option>
			<option value="2">2 (Company)</option>
		</select>
	</div>
	<div class="row">
		<label for="buyerTitle">Title</label>
		<input type="text" name="buyerTitle" id="buyerTitle" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerTitle'] ?>" />
		<input type="button" class="submit" value="clear buyer data" onclick="clearSampleBuyer()" />
	</div>
	<div class="row">
		<label for="buyerLastName">Last name</label>
		<input type="text" name="buyerLastName" id="buyerLastName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerLastName'] ?>" />
	</div>
	<div class="row">
		<label for="buyerFirstName">First name</label>
		<input type="text" name="buyerFirstName" id="buyerFirstName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerFirstName'] ?>" />
		<span class="help">(required unique wallet ID if is set)</span>
	</div>
	<div class="row">
		<label for="buyerEmail">email</label>
		<input type="text" name="buyerEmail" id="buyerEmail" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerEmail'] ?>" />
	</div>
	<table style='width: 100%;'>
		<tr>
			<td>
				<fieldset>
					<div class="row">
			        	<h5>Billing address</h5>
			        </div>
			        <div class="row">
			            <label for="billingAddressTitle">Title</label>
			            <input type="text" name="billingAddressTitle" id="billingAddressTitle" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressTitle'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressFirstName">First name</label>
			            <input type="text" name="billingAddressFirstName" id="billingAddressFirstName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressFirstName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressLastName">Last name</label>
			            <input type="text" name="billingAddressLastName" id="billingAddressLastName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressLastName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressName">Name</label>
			            <input type="text" name="billingAddressName" id="billingAddressName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressStreet1">Street 1</label>
			            <input type="text" name="billingAddressStreet1" id="billingAddressStreet1" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressStreet1'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressStreet2">Street 2</label>
			            <input type="text" name="billingAddressStreet2" id="billingAddressStreet2" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressStreet2'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCity">City</label>
			            <input type="text" name="billingAddressCity" id="billingAddressCity" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressCity'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressZipCode">Zip code</label>
			            <input type="text" name="billingAddressZipCode" id="billingAddressZipCode" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressZipCode'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCountry">Country</label>
			            <input type="text" name="billingAddressCountry" id="billingAddressCountry" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressCountry'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCounty">County</label>
			            <input type="text" name="billingAddressCounty" id="billingAddressCounty" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressCounty'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressState">State</label>
			            <input type="text" name="billingAddressState" id="billingAddressState" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressState'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressPhoneType">Phone type</label>
			            <select	name="billingAddressPhoneType" id="billingAddressPhoneType">
							<option value="0">0 (Undefined)</option>
							<option value="1">1 (Home Phone)</option>
							<option value="2">2 (Work Phone)</option>
							<option value="3">3 (Messages)</option>
							<option value="4">4 (Billing Phone)</option>
							<option value="5">5 (Temporary Phone)</option>
							<option value="6">6 (Mobile Phone Code)</option>
						</select>
			        </div>
			        <div class="row">
			            <label for="billingAddressPhone">Phone</label>
			            <input type="text" name="billingAddressPhone" id="billingAddressPhone" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['billingAddressPhone'] ?>" />
			        </div>
			    </fieldset>
			</td>
			<td>
				<fieldset>
					<div class="row">
			        	<h5>Shipping address</h5>
			        </div>
			        <div class="row">
			            <label for="shippingAddressTitle">Title</label>
			            <input type="text" name="shippingAddressTitle" id="shippingAddressTitle" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressTitle'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressFirstName">First name</label>
			            <input type="text" name="shippingAddressFirstName" id="shippingAddressFirstName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressFirstName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressLastName">Last name</label>
			            <input type="text" name="shippingAddressLastName" id="shippingAddressLastName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressLastName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressName">Name</label>
			            <input type="text" name="shippingAddressName" id="shippingAddressName" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressStreet1">Street 1</label>
			            <input type="text" name="shippingAddressStreet1" id="shippingAddressStreet1" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressStreet1'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressStreet2">Street 2</label>
			            <input type="text" name="shippingAddressStreet2" id="shippingAddressStreet2" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressStreet2'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressCity">City</label>
			            <input type="text" name="shippingAddressCity" id="shippingAddressCity" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressCity'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressZipCode">Zip code</label>
			            <input type="text" name="shippingAddressZipCode" id="shippingAddressZipCode" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressZipCode'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressCountry">Country</label>
			            <input type="text" name="shippingAddressCountry" id="shippingAddressCountry" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressCountry'] ?>" />
			        </div>
			        
			        <div class="row">
			            <label for="shippingAddressCounty">County</label>
			            <input type="text" name="shippingAddressCounty" id="shippingAddressCounty" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressCounty'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressState">State</label>
			            <input type="text" name="shippingAddressState" id="shippingAddressState" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressState'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressPhoneType">Phone type</label>
			            <select	name="shippingAddressPhoneType" id="shippingAddressPhoneType">
							<option value="0">0 (Undefined)</option>
							<option value="1">1 (Home Phone)</option>
							<option value="2">2 (Work Phone)</option>
							<option value="3">3 (Messages)</option>
							<option value="4">4 (Billing Phone)</option>
							<option value="5">5 (Temporary Phone)</option>
							<option value="6">6 (Mobile Phone Code)</option>
						</select>
			        </div>
			        <div class="row">
			            <label for="shippingAddressPhone">Phone</label>
			            <input type="text" name="shippingAddressPhone" id="shippingAddressPhone" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['shippingAddressPhone'] ?>" />
			        </div>
			    </fieldset>
			</td>
		</tr>
	</table>
	<div class="row">
		<label for="buyerAccountCreateDate">Account create date</label>
		<input type="text" name="buyerAccountCreateDate" id="buyerAccountCreateDate" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerAccountCreateDate'] ?>" />
		<span class="help">(format : "dd/mm/yy")</span>
	</div>
	<div class="row">
		<label for="buyerAverageAmount">Average amount</label>
		<input type="text" name="buyerAverageAmount" id="buyerAverageAmount" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerAverageAmount'] ?>" />
	</div>
	<div class="row">
		<label for="buyerOrderCount">Order count</label>
		<input type="text" name="buyerOrderCount" id="buyerOrderCount" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerOrderCount'] ?>" />
	</div>
	<div class="row">
		<label for="buyerWalletId">Wallet ID</label>
		<input type="text" name="buyerWalletId" id="buyerWalletId" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['buyerWalletId'] ?>" />
	</div>
	<div class="row">
		<label for="buyerWalletDisplayed">Display Wallet</label>
		<select	name="buyerWalletDisplayed" id="buyerWalletDisplayed">
			<option value="">yes</option>
			<option value="none">no</option>
		</select>
		<span class="help">(choose wether to display wallet on web payment page or not)</span>
	</div>
	<div class="row">
		<label for="buyerWalletSecured">Wallet security</label>
		<select	name="buyerWalletSecured" id="buyerWalletSecured">
			<option value="">none</option>
			<option value="CVV">CVV</option>
		</select>
		<span class="help">(corresponding CVV will have to be filled by the buyer)</span>
	</div>
	<div class="row">
		<label for="buyerWalletCardInd">Wallet card index</label>
		<input type="text" name="buyerWalletCardInd" id="buyerWalletCardInd" value="" />
	</div>
	<div class="row">
		<label for="buyerIp">IP</label>
		<input type="text" name="buyerIp" id="buyerIp" value="" />
	</div>
	<div class="row">
		<label for="mobilePhone">Mobile phone</label>
		<input type="text" name="mobilePhone" id="mobilePhone" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['mobilePhone'] ?>" />
	</div>
	<div class="row">
		<label for="customerId">Customer ID</label>
		<input type="text" name="customerId" id="customerId" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['customerId'] ?>" />
	</div>
	<div class="row">
		<label for="legalDocument">Legal document</label>
		<select	name="legalDocument" id="legalDocument">
			<option value="1">1 (CPF)</option>
			<option value="2">2 (CNPJ)</option>
			<option value="3">3 (RG)</option>
			<option value="4">4 (IE)</option>
			<option value="5">5 (Passport)</option>
			<option value="6">6 (CTPS)</option>
			<option value="7">7 (Voter ID Card)</option>
		</select>
	</div>
	<div class="row">
		<label for="birthDate">Birth date</label>
		<input type="text" name="birthDate" id="birthDate" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['birthDate'] ?>" />
		<span class="help">(format : "yyyy-mm-dd")</span>
	</div>
	<div class="row">
		<label for="fingerprintID">Finger print ID</label>
		<input type="text" name="fingerprintID" id="fingerprintID" value="<?php echo $sampleBuyerData[$sampleBuyerIndex]['fingerprintID'] ?>" />
	</div>
</fieldset>
