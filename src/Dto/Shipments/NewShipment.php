<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Shipments;

use JsonSerializable;
use Phodoval\DpdGeoApi\Dto\Person;

class NewShipment implements JsonSerializable {
    public function __construct(
        public string $customerDsw,
        public ShipmentType $shipmentType,
        public Person $sender,
        public Person $receiver,

        /**
         * @var ShipmentParcel[]
         */
        public array $parcels,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array {
        return [
            'customer' => [
                'dsw' => $this->customerDsw,
            ],
            'shipmentType' => $this->shipmentType,
            'sender' => $this->sender,
            'receiver' => $this->receiver,
            'parcels' => $this->parcels,
        ];
    }
}