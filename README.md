# SenseBank Installment for Laravel

## Installation
```shell
composer require std-out/laravel-sensebank-installment
```
After that, open config/app.php and add to the providers array this
```php
\StdOut\LaravelSensebankInstallment\SensebankInstallmentServiceProvider::class,
```
And if its need, publish config
```shell
php artisan vendor:publish --tag=config
```

Finally, add environment variable with own credentials
```env
SENSEBANK_INSTALLMENT_URL=
SENSEBANK_PARTNER_ID=
SENSEBANK_PASSWORD=
```
