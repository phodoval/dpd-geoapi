<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class DepotNumbers {
    public function __construct(
        public string $longNumber,
        public string $shortNumber,
    ) {}
}