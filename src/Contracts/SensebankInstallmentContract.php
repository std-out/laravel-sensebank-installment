<?php

declare(strict_types=1);

namespace StdOut\LaravelSensebankInstallment\Contracts;

interface SensebankInstallmentContract
{
    public function order();

    public function statement();

    public function guarantee();
}
