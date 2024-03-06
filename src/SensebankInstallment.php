<?php

namespace StdOut\LaravelSensebankInstallment;

use Psr\Http\Client\ClientInterface;
use StdOut\LaravelSensebankInstallment\Contracts\SensebankInstallmentContract;
use Yuriizee\SenseBankInstallmentSDK\Client;
use Yuriizee\SenseBankInstallmentSDK\Config;
use Yuriizee\SenseBankInstallmentSDK\InstallmentSDK;
use Yuriizee\SenseBankInstallmentSDK\Requests\Guarantee;
use Yuriizee\SenseBankInstallmentSDK\Requests\Order;
use Yuriizee\SenseBankInstallmentSDK\Requests\Statement;

class SensebankInstallment implements SensebankInstallmentContract
{
    private Config $config;
    private InstallmentSDK $installmentSDK;
    private ClientInterface $client;

    public function __construct()
    {
        $this->initConfig();
        $this->initClient();
        $this->initInstallmentSDK();
    }

    private function initConfig(): void
    {
        $this->config = new Config(
            config('sensebank-installment.baseUrl'),
            config('sensebank-installment.partnerId'),
            config('sensebank-installment.password')
        );
    }

    private function initClient(): void
    {
        $this->client = (new Client($this->config))->getClient();
    }

    private function initInstallmentSDK(): void
    {
        $this->installmentSDK = InstallmentSDK::getInstance($this->config, $this->client);
    }

    public function order(): Order
    {
        return $this->installmentSDK->order();
    }

    public function statement(): Statement
    {
        return $this->installmentSDK->statement();
    }

    public function guarantee(): Guarantee
    {
        return $this->installmentSDK->guarantee();
    }
}
