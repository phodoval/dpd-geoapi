<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

class ServiceDesignation {
    public function __construct(
        public string $code,
        public string $combination,
        public string $prefix,
        public string $text,
        public string $mark,
        public ?ServiceDesignation $backVariant = null,
    ) {}
}