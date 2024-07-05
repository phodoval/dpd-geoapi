<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class CashOnDelivery {
    public function __construct(
        public int $amountCents,
        public string $currency,
        public PaymentType $payment,
        public BankAccount $account,
        public string $variableSymbol,
    ) {}
}