<?php

namespace Alipay;

class Config
{


	private string $privateKey = '';


	private string $publicKey = '';

	private string $gatewayUrl = 'https://openapi.alipay.com/gateway.do';
	private string $appId = '2021003100610037';
	private string $apiVersion = '1.0';
	private string $signType = 'RSA2';
	private string $postCharset = 'utf-8';
	private string $format = 'json';



	private string $notify = '';

	/**
	 * @return string
	 */
	public function getPrivateKey(): string
	{
		return $this->privateKey;
	}

	/**
	 * @param string $privateKey
	 */
	public function setPrivateKey(string $privateKey): void
	{
		$this->privateKey = $privateKey;
	}

	/**
	 * @return string
	 */
	public function getPublicKey(): string
	{
		return $this->publicKey;
	}

	/**
	 * @param string $publicKey
	 */
	public function setPublicKey(string $publicKey): void
	{
		$this->publicKey = $publicKey;
	}

	/**
	 * @return string
	 */
	public function getGatewayUrl(): string
	{
		return $this->gatewayUrl;
	}

	/**
	 * @param string $gatewayUrl
	 */
	public function setGatewayUrl(string $gatewayUrl): void
	{
		$this->gatewayUrl = $gatewayUrl;
	}

	/**
	 * @return string
	 */
	public function getAppId(): string
	{
		return $this->appId;
	}

	/**
	 * @param string $appId
	 */
	public function setAppId(string $appId): void
	{
		$this->appId = $appId;
	}

	/**
	 * @return string
	 */
	public function getApiVersion(): string
	{
		return $this->apiVersion;
	}

	/**
	 * @param string $apiVersion
	 */
	public function setApiVersion(string $apiVersion): void
	{
		$this->apiVersion = $apiVersion;
	}

	/**
	 * @return string
	 */
	public function getSignType(): string
	{
		return $this->signType;
	}

	/**
	 * @param string $signType
	 */
	public function setSignType(string $signType): void
	{
		$this->signType = $signType;
	}

	/**
	 * @return string
	 */
	public function getPostCharset(): string
	{
		return $this->postCharset;
	}

	/**
	 * @param string $postCharset
	 */
	public function setPostCharset(string $postCharset): void
	{
		$this->postCharset = $postCharset;
	}

	/**
	 * @return string
	 */
	public function getFormat(): string
	{
		return $this->format;
	}

	/**
	 * @param string $format
	 */
	public function setFormat(string $format): void
	{
		$this->format = $format;
	}

	/**
	 * @return string
	 */
	public function getNotify(): string
	{
		return $this->notify;
	}

	/**
	 * @param string $notify
	 */
	public function setNotify(string $notify): void
	{
		$this->notify = $notify;
	}





}
