<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class BankAccountDomestic {
    public function __construct(
        public string $bankCode,
        public string $bankName,
        public string $accountNumber,
        public string $accountName,
    ) {}
}