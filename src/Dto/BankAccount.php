<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class BankAccount {
    public function __construct(
        public BankAccountDomestic $domestic,
        public BankAccountInternational $international,
    ) {}
}