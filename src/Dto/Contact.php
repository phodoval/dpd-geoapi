<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Contact {
    public function __construct(
        public string $person,
        public string $phone,
        public string $email,
    ) {}
}