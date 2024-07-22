<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Shipments;

use Phodoval\DpdGeoApi\Dto\References;

class ShipmentParcel {
    public function __construct(
        public string      $parcelNumber,
        public int         $weightGrams,
        public ?string     $backParcelNumber = null,
        public ?References $references = null,
    ) {}
}