<?php

return [
    'baseUrl' => env('SENSEBANK_INSTALLMENT_URL', 'https://retailapi.sensebank.com.ua:8243/api/PartnerInstallment/v1.0/'),
    'partnerId' => env('SENSEBANK_PARTNER_ID'),
    'password' => env('SENSEBANK_PASSWORD'),
];
