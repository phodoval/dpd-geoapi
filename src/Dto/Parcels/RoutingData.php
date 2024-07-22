<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class RoutingData {
    public function __construct(
        public Route $routing,
        public DispatchDepot $dispatchDepot,
        public DestinationDepot $destinationDepot,
    ) {}
}