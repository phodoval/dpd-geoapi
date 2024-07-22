<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Namespaces;

use CuyZ\Valinor\Mapper\MappingError;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use Phodoval\DpdGeoApi\Dto\Shipments\NewShipment;
use Phodoval\DpdGeoApi\Dto\Shipments\Shipment;

class Shipments extends AbstractNamespace {
    /**
     * @param NewShipment[] $data
     * @return Shipment[]
     * @throws GuzzleException
     * @throws JsonException
     * @throws MappingError
     */
    public function create(array $data): array {
        /** @var Shipment[] */
        return $this->request('POST', '', 'Shipment[]', $data);
    }

    public function getNamespace(): string {
        return 'shipments';
    }
}