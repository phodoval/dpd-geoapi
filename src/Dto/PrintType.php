<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

enum PrintType: string {
    case PDF = 'PDF';
    case EPL = 'EPL';
    case ZPL = 'ZPL';
    case RAW = 'RAW';
}