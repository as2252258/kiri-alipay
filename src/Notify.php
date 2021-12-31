<?php

namespace Alipay;

class Notify
{

	private ?Config $config = null;

	/**
	 * @return Config
	 */
	public function getConfig(): Config
	{
		return $this->config;
	}


	/**
	 * @param Config $config
	 */
	public function setConfig(Config $config): void
	{
		$this->config = $config;
	}


	/**
	 * @param array $params
	 * @return bool
	 */
	public function check(array $params): bool
	{
		$aop = new \AopClient();
		$aop->alipayrsaPublicKey = $this->config->getPublicKey();
		if (!$aop->rsaCheckV1($params, NULL, "RSA2")) {
			return false;
		};
		return true;
	}

}
