<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Payer {
    public function __construct(
        public Customer $customer,
        public Person $customerAddress,
    ) {}
}