<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class ParcelNumbers {
    public function __construct(
        public string $main,
        public string $back,
    ) {}
}