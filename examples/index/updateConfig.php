<?php
$update_config_status = 0;
if(isset($_POST['submit'])){
	$configFile = '../../lib/CONFIG.php';
	if(is_writable($configFile)){
		$handle = fopen($configFile, 'w');
		fwrite($handle, "<?php \n");
		fwrite($handle, "	// connection settings \n");
		fwrite($handle, "	DEFINE('MERCHANT_ID', '".$_POST['MERCHANT_ID']."'); \n");
		fwrite($handle, "	DEFINE('ACCESS_KEY', '".$_POST['ACCESS_KEY']."'); \n");
		fwrite($handle, "	DEFINE('ACCESS_KEY_REF', '".$_POST['ACCESS_KEY_REF']."'); \n");
		fwrite($handle, "	DEFINE('PROXY_HOST', '".$_POST['PROXY_HOST']."'); \n");
		fwrite($handle, "	DEFINE('PROXY_PORT', '".$_POST['PROXY_PORT']."'); \n");
		fwrite($handle, "	DEFINE('PROXY_LOGIN', '".$_POST['PROXY_LOGIN']."'); \n");
		fwrite($handle, "	DEFINE('PROXY_PASSWORD', '".$_POST['PROXY_PASSWORD']."'); \n");
		fwrite($handle, "	DEFINE('ENVIRONMENT', '".$_POST['ENVIRONMENT']."'); \n");
		fwrite($handle, "\n");
		fwrite($handle, "	// web services settings \n");
		fwrite($handle, "	DEFINE( 'WS_VERSION', '".$_POST['WS_VERSION']."');\n");
		fwrite($handle, "	DEFINE( 'PAYMENT_CURRENCY', '".$_POST['PAYMENT_CURRENCY']."');\n");
		fwrite($handle, "	DEFINE( 'ORDER_CURRENCY', '".$_POST['ORDER_CURRENCY']."');\n");
		fwrite($handle, "	DEFINE( 'SECURITY_MODE', '".$_POST['SECURITY_MODE']."');\n");
		fwrite($handle, "	DEFINE( 'LANGUAGE_CODE', '".$_POST['LANGUAGE_CODE']."');\n");
		fwrite($handle, "	DEFINE( 'PAYMENT_ACTION', '".$_POST['PAYMENT_ACTION']."');\n");
		fwrite($handle, "	DEFINE( 'PAYMENT_MODE', '".$_POST['PAYMENT_MODE']."');\n");
		fwrite($handle, "	DEFINE( 'CANCEL_URL', '".$_POST['CANCEL_URL']."');\n");
		fwrite($handle, "	DEFINE( 'NOTIFICATION_URL','".$_POST['NOTIFICATION_URL']."');\n");
		fwrite($handle, "	DEFINE( 'RETURN_URL', '".$_POST['RETURN_URL']."');\n");
		fwrite($handle, "	DEFINE( 'CUSTOM_PAYMENT_TEMPLATE_URL', '".$_POST['CUSTOM_PAYMENT_TEMPLATE_URL']."');\n");
		fwrite($handle, "	DEFINE( 'CUSTOM_PAYMENT_PAGE_CODE', '".$_POST['CUSTOM_PAYMENT_PAGE_CODE']."');\n");
		fwrite($handle, "	DEFINE( 'CONTRACT_NUMBER', '".$_POST['CONTRACT_NUMBER']."');\n");
		fwrite($handle, "	DEFINE( 'CONTRACT_NUMBER_LIST', '".$_POST['CONTRACT_NUMBER_LIST']."');\n");
		fwrite($handle, "	DEFINE( 'SECOND_CONTRACT_NUMBER_LIST', '".$_POST['SECOND_CONTRACT_NUMBER_LIST']."');\n");
		fwrite($handle, "\n");
		fwrite($handle, "	// demo settings \n");
		$parsedUrl = parse_url($_SERVER['HTTP_REFERER']);
		$parsedPath = explode('examples', $parsedUrl['path']);
		fwrite($handle, "	DEFINE( 'KIT_ROOT', '".$parsedUrl['scheme'].'://'.$parsedUrl['host'].$parsedPath[0]."');\n");
		fwrite($handle, "?> \n");
		fclose($handle);
		$update_config_status = 0;
	}else{
		$update_config_status = 3;
	}
	header("Location: ../demos/index.php?e=configuration&res_upd=$update_config_status");
}else{
	header("Location: ../demos/index.php?e=configuration");
}
?>