<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Subject {
    public function __construct(
        public string $name1,
        public string $name2,
        public Contact $contact,
    ) {}
}