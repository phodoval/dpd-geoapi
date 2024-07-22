<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Shipments;

use Phodoval\DpdGeoApi\Dto\Customer;
use Phodoval\DpdGeoApi\Dto\Payer;
use Phodoval\DpdGeoApi\Dto\References;
use Phodoval\DpdGeoApi\Dto\Person;

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
         * @var ShipmentParcel[]
         */
        public array        $parcels,

        public ?References  $references = null,
    ) {}
}