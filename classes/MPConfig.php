<?php

require 'vendor/autoload.php';


class MPConfig {


	private 	$access_token='APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398';



	public function __construct(){
		///MercadoPago\SDK::setClientId($this->app_id);
		///MercadoPago\SDK::setClientSecret($this->secret_key);
		MercadoPago\SDK::setAccessToken($this->access_token);
	}


	public function get_payment($collection_id=0){
		$payment = MercadoPago\Payment::find_by_id($collection_id);
		if(!$payment) return false;
		return $payment;
	}

	public function get_merchant_order($id=0){

		$merchant_order = MercadoPago\MerchantOrder::find_by_id($id);
		return $merchant_order;

	}

	public function get_total($payments=array()){
		$paid_amount = 0;
		foreach ($payments as $payment) {
			if ($payment->status == 'approved'){
				$paid_amount += $payment->transaction_amount;
			}
		}
		return $paid_amount;
	}

	public function search($hash=''){
		$payment = MercadoPago\Payment::search(['external_reference'=>$hash]);
		return $payment;
	}


	public function create_payment($values=array()){

		if(!$values) return false;
		$obj = is_array($values) ? (object) $values : $values;


		$preference = new MercadoPago\Preference();
		///return $preference;

		$item = new MercadoPago\Item();
		$item->id = 1234;
		$item->title = $obj->product;
		$item->description = 'Dispositivo móvil de Tienda e-commerce';
		$item->quantity = $obj->quantity;
		$item->currency_id = "ARS";
		$item->unit_price = $obj->price;
		$item->category_id = 'phones';
		$item->picture_url = 'https://rodoamoroso-mp-ecommerce-php.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg';

		$preference->items = array($item);

		$payer = new MercadoPago\Payer();
		$payer->name = 'Lalo';
		$payer->surname = 'Landa';
		$payer->email = 'test_user_63274575@testuser.com';
		$payer->phone = array(
			'area_code'=>'11',
			'number'=>'22223333'
		);
		$payer->address = array(
			'street_name' => 'False',
			'street_number' => '123',
			'zip_code'=>'1111'
		);
		$preference->payer = $payer;



		$preference->payment_methods = [
			'excluded_payment_methods'=>[
				['id'=>'amex']
			],
			'excluded_payment_types'=>[
				["id"=>"atm"]
			],
			'installments' => 6
		];


		MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");



		$preference->notification_url = 'https://rodoamoroso-mp-ecommerce-php.herokuapp.com/webhook.php';
		$preference->external_reference = 'rodosoft@hotmail.com';
		$preference->back_urls = array(
			'success'=>'https://rodoamoroso-mp-ecommerce-php.herokuapp.com/pago-success.php',
			'failure'=>'https://rodoamoroso-mp-ecommerce-php.herokuapp.com/pago-failure.php',
			'pending'=>'https://rodoamoroso-mp-ecommerce-php.herokuapp.com/pago-pending.php'
			//'success'=>'https://localhost/mp-ecommerce-php/pago-success.php',
			//'failure'=>'https://localhost/mp-ecommerce-php/pago-failure.php',
			//'pending'=>'https://localhost/mp-ecommerce-php/pago-pending.php'
		);
		$preference->auto_return = "approved";

		# Save and posting preference
		$preference->save();
		return $preference;

	}


}