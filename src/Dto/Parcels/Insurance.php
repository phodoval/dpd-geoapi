<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class Insurance {
    public function __construct(
        public int $amountCents,
        public string $currency,
    ) {}
}