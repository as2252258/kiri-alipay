<?php

namespace Alipay;

use JetBrains\PhpStorm\Pure;

class AppAlipay
{


	private \AopClient $aopClient;


	private string $notify = '';


	/**
	 * @param Config $config
	 */
	#[Pure] public function __construct(Config $config)
	{
		$this->aopClient = new \AopClient();
		$this->aopClient->gatewayUrl = $config->getGatewayUrl();
		$this->aopClient->appId = $config->getAppId();
		$this->aopClient->rsaPrivateKey = $config->getPrivateKey();
		$this->aopClient->alipayrsaPublicKey = $config->getPublicKey();
		$this->aopClient->apiVersion = $config->getApiVersion();
		$this->aopClient->signType = $config->getSignType();
		$this->aopClient->postCharset = $config->getPostCharset();
		$this->aopClient->format = $config->getFormat();

		$this->notify = $config->getNotify();
	}


	/**
	 * @param string $orderNo
	 * @param float|int $price
	 * @param string $body
	 * @param string $discountable
	 * @return string
	 */
	public function payment(string $orderNo, float|int $price, string $body, string $discountable = '0'): string
	{
		$params['out_trade_no'] = $orderNo;
		$params['total_amount'] = $price;
		$params['discountable_amount'] = $discountable;
		$params['subject'] = $body;
		$params['product_code'] = 'QUICK_MSECURITY_PAY';
		$json = json_encode($params, JSON_UNESCAPED_UNICODE);

		$request = new \AlipayTradeAppPayRequest();
		$request->setBizContent($json);
		$request->setNotifyUrl($this->notify);

		return $this->aopClient->sdkExecute($request);
	}


}
