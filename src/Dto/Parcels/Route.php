<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class Route {
    public function __construct(
        public string $routingText,
        public string $DSORT,
        public string $OSORT,
        public string $SSORT,
    ) {}
}