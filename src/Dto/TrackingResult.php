<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

class TrackingResult {
    public function __construct(
       public ParcelInfo $parcelInfo,

        /**
         * @var ParcelEvent[]
         */
       public array $parcelEvents,
    ) {}
}