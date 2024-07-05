<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

use Phodoval\DpdGeoApi\Utils\Countries;

class Country {
    public function __construct(
        public ?string $isoAlpha2 = null,
        public ?string $isoAlpha3 = null,
        public ?string $isoNumeric = null,
    ) {}

    public function getCode(): ?string {
        return $this->isoAlpha3 ?? $this->isoAlpha2 ?? $this->convertNumericToAlpha2();
    }

    private function convertNumericToAlpha2(): ?string {
        if ($this->isoNumeric === null) {
            return null;
        }

        foreach (Countries::ALL as $country) {
            if ($country['numeric'] === $this->isoNumeric) {
                return $country['alpha2'];
            }
        }

        return null;
    }
}