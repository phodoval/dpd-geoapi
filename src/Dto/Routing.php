<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Routing {
    public function __construct(
        public RoutingData $main,
        public RoutingData $back,
    ) {}
}