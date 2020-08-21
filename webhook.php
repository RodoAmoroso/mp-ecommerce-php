<?php
header("Content-Type: application/json; charset=utf-8", true);


require 'classes/MPConfig.php';

if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
	http_response_code(400);
	die();
}

$MPConfig = new MPConfig;

switch($_GET["topic"]) {

	case 'payment':
		try {
			$payment_info = MercadoPago\Payment::find_by_id($_GET["id"]);
			$merchant_order = MercadoPago\MerchantOrder::find_by_id($payment_info->order->id);
		} catch (Exception $e) {
			http_response_code(400);
			die();
		}
		break;

	case 'merchant_order':
		try{
			$merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
		}catch(MercadoPagoException $e){
			http_response_code(400);
			die();
		}
		break;

	default:
		http_response_code(400);
		die();
		break;

}

if(is_null($merchant_order)){
	http_response_code(400);
	die();
}

print_r(json_encode($merchant_order));