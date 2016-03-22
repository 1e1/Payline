<form action="getWebPaymentDetail.php" method="post" class="payline-form">
    <fieldset>
            <h4>Get Web Payment Details, full example</h4>
            <div class="row">
                <label for="token">Payment token</label>
                <input type="text" name="token" id="token" value="" />
                <span class="help">(required)</span>
            </div>
   </fieldset>
   	    <fieldset>
        <h4>WSDL's Version</h4>
        <div class="row">
            <label for="version">Version</label>
            <input type="text" name="version" id="version" value="" />
        </div>
    </fieldset>
   <input type="submit" name="submit" class="submit" value="Get Web payment details" />
</form>
