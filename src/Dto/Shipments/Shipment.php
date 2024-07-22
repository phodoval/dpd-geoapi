<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Shipments;

use Phodoval\DpdGeoApi\Dto\Customer;
use Phodoval\DpdGeoApi\Dto\Parcels\Parcel;
use Phodoval\DpdGeoApi\Dto\Payer;
use Phodoval\DpdGeoApi\Dto\Person;
use Phodoval\DpdGeoApi\Dto\References;

class Shipment {
    public function __construct(
        public int          $id,
        public ShipmentType $shipmentType,
        public Customer     $customer,
        public Person       $receiver,
        public Person       $sender,
        public Payer        $payer,
        public Person       $declaredSender,

        /**
         * @var Parcel[]
         */
        public array        $parcels,

        public ?References  $references = null,
    ) {}
}