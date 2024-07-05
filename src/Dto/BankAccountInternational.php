<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class BankAccountInternational {
    public function __construct(
        public string $IBAN,
        public string $BIC,
    ) {}
}