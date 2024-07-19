<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class RoutingData {
    public function __construct(
        public Route $routing,
        public DispatchDepot $dispatchDepot,
        public DestinationDepot $destinationDepot,
    ) {}
}