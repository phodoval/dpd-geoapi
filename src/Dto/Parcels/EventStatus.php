<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class EventStatus {
    public function __construct(
        public string $statusCode,
        public string $description,
    ) {}
}