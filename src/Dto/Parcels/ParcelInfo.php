<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Parcels;

use Phodoval\DpdGeoApi\Dto\Person;

class ParcelInfo {
    public function __construct(
        public Person $sender,
        public Person $receiver,
        public ?Person $declaredSender,
        public string $pickupPointId,
        public CashOnDelivery $cod,
        public ServiceDesignation $serviceDesignation,
        public string $parcelNumber,
        public Routing $routing,
    ) {}
}