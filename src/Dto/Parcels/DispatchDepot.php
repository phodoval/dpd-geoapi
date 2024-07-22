<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class DispatchDepot {
    public function __construct(
        public DepotNumbers $depotNumbers,
        public string $street,
        public string $city,
        public string $countryAlpha2,
        public string $postalCode,
    ) {}
}