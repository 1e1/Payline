<?php
// INITIALIZE
//include "../../include.php";
$array = array();
$payline = new paylineSDK(MERCHANT_ID, ACCESS_KEY, PROXY_HOST, PROXY_PORT, PROXY_LOGIN, PROXY_PASSWORD, ENVIRONMENT);

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/order.php';
include '../arraySet/privateDataList.php';
include '../arraySet/buyer.php';
include '../arraySet/owner.php';
include '../arraySet/recurring.php';
include '../arraySet/urls.php';
include '../arraySet/webOptions.php';

// FIRST CONTRACT LIST
if (isset($_POST['selectedContract'])){
	$contracts = explode(";",$_POST['selectedContract']);
	$array['contracts'] = $contracts;
}

// SECOND CONTRACT LIST
if (isset($_POST['secondSelectedContract'])){
	$secondContracts = explode(";",$_POST['secondSelectedContract']);
	$array['secondContracts'] = $secondContracts;
}

// WALLET CONTRACT LIST
if (isset($_POST['contractNumberWalletList'])){
	$walletContracts = explode(";",$_POST['contractNumberWalletList']);
	$array['walletContracts'] = $walletContracts;
}

// EXECUTE
$response = $payline->doWebPayment($array);

// RESPONSE
if(isset($response) && $response['result']['code'] == '00000'){
	header("location:".$response['redirectURL']);
	exit();
}
elseif(isset($response)) {
	echo 'ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' <BR/>';
}

?>