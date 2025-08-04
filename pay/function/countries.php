<?php
$flutterwave_countries = [
    'NG' => [
        'country' => 'Nigeria',
        'currency' => '₦',
        'currency_code' => 'NGN',
        'to_usd' => 0.000625,
        'from_usd' => 1600,
        'payment_methods' => ['Card', 'USSD', 'Bank Transfer', 'QR Code']
    ],
    'GH' => [
        'country' => 'Ghana',
        'currency' => '₵',
        'currency_code' => 'GHS',
        'to_usd' => 0.0960,
        'from_usd' => round(1 / 0.0960, 2),
        'payment_methods' => ['Card', 'Mobile Money']
    ],
    'KE' => [
        'country' => 'Kenya',
        'currency' => 'KSh',
        'currency_code' => 'KES',
        'to_usd' => 0.00774,
        'from_usd' => round(1 / 0.00774, 2),
        'payment_methods' => ['Card', 'M-Pesa']
    ],
    'ZA' => [
        'country' => 'South Africa',
        'currency' => 'R',
        'currency_code' => 'ZAR',
        'to_usd' => 0.0561,
        'from_usd' => round(1 / 0.0561, 2),
        'payment_methods' => ['Card', 'Account Transfer', 'QR Code']
    ],
    'CM' => [
        'country' => 'Cameroon',
        'currency' => 'FCFA',
        'currency_code' => 'XAF',
        'to_usd' => 0.001772,
        'from_usd' => round(1 / 0.001772, 2),
        'payment_methods' => ['Card', 'Mobile Money']
    ],
    'SN' => [
        'country' => 'Senegal',
        'currency' => 'FCFA',
        'currency_code' => 'XOF',
        'to_usd' => 0.001772,
        'from_usd' => round(1 / 0.001772, 2),
        'payment_methods' => ['Card', 'Mobile Money']
    ]
];
