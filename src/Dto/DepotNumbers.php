<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class DepotNumbers {
    public function __construct(
        public string $longNumber,
        public string $shortNumber,
    ) {}
}