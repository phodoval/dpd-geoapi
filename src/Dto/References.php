<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class References {
    public function __construct(
        public string $ref1,
        public ?string $ref2 = null,
        public ?string $ref3 = null,
        public ?string $ref4 = null,
    ) {}
}