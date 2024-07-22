<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class EventService {
    public function __construct(
        public string $code,
        public string $additionalCode,
    ) {}
}