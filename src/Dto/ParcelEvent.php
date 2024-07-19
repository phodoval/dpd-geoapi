<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

use DateTimeImmutable;
use DateTimeInterface;

class ParcelEvent {
    public function __construct(
        public string $id,
        public EventStatus $status,
        public string $additionalInfo,
        public DateTimeImmutable $createdAt,
        public EventService $service,
    ) {}
}