<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class Parcel {
    public function __construct(
        public ParcelNumbers $parcelNumbers,
        public ParcelReferences $references,
        public Insurance $insurance,
        public bool $isPrinted,
        public int $weightGrams,
        public int $id,
    ) {}
}