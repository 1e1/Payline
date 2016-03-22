<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
//include "../../include.php";
$array = array();
$payline = new paylineSDK(MERCHANT_ID, ACCESS_KEY, PROXY_HOST, PROXY_PORT, PROXY_LOGIN, PROXY_PASSWORD, PRODUCTION);

// GET TOKEN
if(isset($_POST['token'])){
    $array['token'] = $_POST['token'];
}elseif(isset($_GET['token'])){
    $array['token'] = $_GET['token'];
}else{
    echo 'Missing TOKEN';
}

//VERSION
if(isset($_POST['version'])){
	$array['version'] = $_POST['version'];
}else{
    $array['version'] = '';
}

// RESPONSE FORMAT
$response = $payline->getWebPaymentDetails($array);
if(isset($response)){
    require('../demos/result/header.html');
    echo '<H3>RESPONSE</H3>';
    print_a($response, 0, true);
    require('../demos/result/footer.html');
}
?>
