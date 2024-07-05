<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Address {
    public function __construct(
        public string $street,
        public string $postalCode,
        public string $city,
        public Country $country,
    ) {}
}