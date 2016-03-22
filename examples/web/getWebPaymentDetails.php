<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
//include "../../include.php";
$array = array();
$payline = new paylineSDK(MERCHANT_ID, ACCESS_KEY, PROXY_HOST, PROXY_PORT, PROXY_LOGIN, PROXY_PASSWORD, ENVIRONMENT);

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
    $array['version'] = WS_VERSION;
}

// RESPONSE FORMAT
$response = $payline->getWebPaymentDetails($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    $response['payment']['contractNumber'],
    $response['order']['ref'],
    $response['transaction']['id'],  
    $response['payment']['action'],
    $response['payment']['amount'],
    $response['payment']['currency'],
    $response['result']['code'],
    $array['token']
  );
  if(isset($response['paymentRecordId']) && $res == 1){ // nouvelle insertion OK
      $res2 = insertPaymentRecordData($array['payment']['contractNumber'],'',$response['paymentRecordId']);
      if($res2 != 1){
        $payline->writeTrace($res2);
      }
  }
  if($res != 1 && $res != 2){
    $payline->writeTrace($res);
  }
}

echo '<table>';
echo '	<tr>';
echo '		<td><H3>REQUEST</H3></td>';
echo '		<td><H3>RESPONSE</H3></td>';
echo '	</tr>';
echo '	<tr>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($array);
echo '		</td>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($response, 0, true);
echo '		</td>';
echo '	</tr>';
echo '</table>';
?>
