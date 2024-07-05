<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class ParcelNumbers {
    public function __construct(
        public string $main,
        public string $back,
    ) {}
}