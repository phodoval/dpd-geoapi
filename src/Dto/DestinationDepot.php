<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class DestinationDepot {
    public function __construct(
        public DepotNumbers $depotNumbers,
    ) {}
}