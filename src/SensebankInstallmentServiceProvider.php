<?php

declare(strict_types=1);

namespace StdOut\LaravelSensebankInstallment;

use Illuminate\Support\ServiceProvider;
use StdOut\LaravelSensebankInstallment\Contracts\SensebankInstallmentContract;

class SensebankInstallmentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sensebank-installment.php' => config_path('sensebank-installment.php'),
        ]);

        $this->app->bind(SensebankInstallmentContract::class, SensebankInstallment::class);
    }
}
