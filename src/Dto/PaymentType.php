<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Dto;

enum PaymentType: string {
    case Cash = 'Cash';
    case CashOrCard = 'CashOrCard';
}