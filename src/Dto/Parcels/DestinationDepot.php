<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class DestinationDepot {
    public function __construct(
        public DepotNumbers $depotNumbers,
    ) {}
}