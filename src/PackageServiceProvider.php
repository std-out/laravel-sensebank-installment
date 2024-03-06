<?php

namespace StdOut\LaravelSensebankInstallment;

use Illuminate\Support\ServiceProvider;
use StdOut\LaravelSensebankInstallment\Contracts\SensebankInstallmentContract;

abstract class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sensebank-installment.php' => config_path('sensebank-installment.php'),
        ]);

        $this->app->bind(SensebankInstallmentContract::class, SensebankInstallment::class);
    }
}
