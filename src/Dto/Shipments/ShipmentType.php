<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto\Shipments;

enum ShipmentType: string {
    case Standard = 'Standard';
    case Collection = 'Collection';
    case ThirdPartyCollection = 'ThirdPartyCollection';
    case Import = 'Import';
    case ThirdPartyStandard = 'ThirdPartyStandard';
    case Return = 'Return';
}