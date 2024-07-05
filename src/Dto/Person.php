<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Person {
    public function __construct(
        public Subject $info,
        public Address $address,
    ) {}
}