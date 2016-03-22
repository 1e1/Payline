<form action="../demos/web.php" method="post" class="payline-form">
    <fieldset>
            <h4>Get Web Payment Details, full example</h4>
            <div class="row">
                <label for="token">Payment token</label>
                <input type="text" name="token" id="token" value="<?php if(isset($_GET['token'])) echo $_GET['token']; ?>" />
                <span class="help">(required)</span>
            </div>
   </fieldset>
   	    <fieldset>
        <h4>WSDL's Version</h4>
        <div class="row">
            <label for="version">Version</label>
            <input type="text" name="version" id="version" value="<?php echo WS_VERSION?>" />
        </div>
    </fieldset>
   <input type="submit" name="submit" class="submit" value="getWebPaymentDetails" />
</form>
