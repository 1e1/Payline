<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
$array = array();
$payline = new paylineSDK(MERCHANT_ID, ACCESS_KEY, PROXY_HOST, PROXY_PORT, PROXY_LOGIN, PROXY_PASSWORD, ENVIRONMENT);

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/card.php';

// TRANSACTION INFO
$array['comment'] = $_POST['comment'];

include '../arraySet/order.php';
include '../arraySet/buyer.php';
include '../arraySet/owner.php';
include '../arraySet/privateDataList.php';

//MEDIA
$array['media'] = $_POST['media'];

// RESPONSE
$response = $payline->doCredit($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    $array['payment']['contractNumber'],
    $array['order']['ref'],
    $response['transaction']['id'],
    $array['payment']['action'],
    $array['payment']['amount'],
    $array['payment']['currency'],
    $response['result']['code']
  );
  if($res != 1){
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
