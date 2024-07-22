<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

use Phodoval\DpdGeoApi\Dto\References;

class Parcel {
    public function __construct(
        public ParcelNumbers $parcelNumbers,
        public References    $references,
        public Insurance     $insurance,
        public bool          $isPrinted,
        public int           $weightGrams,
        public int           $id,
    ) {}
}