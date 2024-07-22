<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

use DateTimeImmutable;

class ParcelEvent {
    public function __construct(
        public string $id,
        public EventStatus $status,
        public string $additionalInfo,
        public DateTimeImmutable $createdAt,
        public EventService $service,
    ) {}
}