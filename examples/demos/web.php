<?php
	include "../../include.php";
	$array = array(
		'doWebPayment',
		'fullWebPayment',
		'getWebPaymentDetails'
	);
	$selected = isset( $_GET['e'] ) && in_array($_GET['e'], $array) ? $_GET['e'] : $array[0];
	$selected = isset($_POST['submit']) ? $_POST['submit'] : $selected;

	$links = '<h3>';
	/*
	foreach( $array as $v )
		$links .= ( $v==$selected ) ? "<a class='backtoform' href='?e=$v'>$v</a> - " : "<a href='?e=$v'>$v</a> - ";
	$links = substr( $links, 0, -2 ).'</h3>';
	*/
	$links .= ( 'doWebPayment'==$selected ) ? "<a class='backtoform' href='?e=doWebPayment'>doWebPayment (light)</a> - " : "<a href='?e=doWebPayment'>doWebPayment (light)</a> - ";
	$links .= ( 'fullWebPayment'==$selected ) ? "<a class='backtoform' href='?e=fullWebPayment'>doWebPayment (full)</a> - " : "<a href='?e=fullWebPayment'>doWebPayment (full)</a> - ";
	$links .= ( 'getWebPaymentDetails'==$selected ) ? "<a class='backtoform' href='?e=getWebPaymentDetails'>getWebPaymentDetails</a>" : "<a href='?e=getWebPaymentDetails'>getWebPaymentDetails</a>";
	$links .= '</h3>';
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Payline demo</title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/forms.css" />
        <script type="text/javascript" src="scripts/mootools-1.11.js"></script>
        <script type="text/javascript" src="scripts/demos.js"></script>
	</head>

	<body onLoad="fillContractNumber('<?php echo CONTRACT_NUMBER; ?>')">
		<?php include_once('scripts/geshi.php'); ?>

		<div id="header">
			<div id="header-inside">
				<div id="logo">
					<h1><a href="http://www.payline.com"><span>payline</span></a></h1>
					<p>by Monext</p>
				</div>
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="web.php" class="on">Web</a></li>
					<li><a href="direct.php">Direct</a></li>
					<li><a href="wallet.php">Wallet</a></li>
					<li><a href="extended.php">Extended</a></li>
					<li><a href="ajax.php">API Ajax</a></li>
				</ul>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<h3 align="right"><?php echo paylineSDK::KIT_VERSION.'&nbsp;&nbsp;-&nbsp;&nbsp;Merchant ID '.MERCHANT_ID.'&nbsp;&nbsp;-&nbsp;&nbsp;'.ENVIRONMENT ?></h3>
					<h2>Web Payment</h2>
					<?php echo $links; ?>
                    <p id="info">Demo that shows the usage of Payline webPayment API</p>
                    <?php if(!isset($_POST['submit'])){?>
                    <p id="sourcelinks">
						<a href="#" id="exampleonly">display example only</a>
						<a href="#" id="htmlcode">html code</a> | <a href="#" id="phpcode">php code</a> | <a href="#" id="csscode">css code</a>
					</p>
					<?php } ?>
					<div id="source">
					<?php
					if(isset($_POST['submit'])){ // validation d'un formulaire
						include('../web/'.$_POST['submit'].'.php');
					}elseif(isset($_GET['token'])){ // retour à la boutique
             			include('../web/'.$_GET['e'].'.php');
          			}else{
						?>

						<div class="code" id="php">
							<?php
                            $filename = "../web/{$selected}.php";
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
                            $geshi = new GeSHi($source, 'php');
                            echo $geshi->parse_code();
                            ?>
						</div>

						<div class="code" id="html">
							<?php
                            $filename = "../web/{$selected}Form.php";
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
							$geshi = new GeSHi($source, 'html4strict');
                            $geshi->enable_keyword_links(false);
							echo $geshi->parse_code();
                            ?>
						</div>

						<div class="code" id="css">
							<?php
                            $filename = 'css/forms.css';
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
                            $geshi = new GeSHi($source, 'css');
                            echo $geshi->parse_code();
                            ?>
						</div>

						<div id="demo">
							<?php
							include("../web/{$selected}Form.php");
							?>
						</div>
					<?php } ?>
					</div>
				</div>
				<span class="clr"></span>
			</div>
		</div>

		<div id="footer">
			<div id="footer-inside">
				<a href="http://www.monext.fr/" class="copy"></a>
				<p>copyright &copy;<?php echo date('Y')?> <a href="http://www.monext.fr/">Monext</a></p>
			</div>
		</div>

	</body>
</html>