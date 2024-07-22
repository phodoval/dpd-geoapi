<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Customer {
    public function __construct(
        public string $DSW,
        public bool $isActive,
        public int $id,
    ) {}
}