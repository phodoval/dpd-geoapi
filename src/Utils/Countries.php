<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Utils;

abstract class Countries {
    /**
     * @var array<array{name: string, alpha2: string, alpha3: string, numeric: string}>
     */
    private static array $data = [];

    /**
     * @return array<array{name: string, alpha2: string, alpha3: string, numeric: string}>
     */
    public static function all(): array {
        if (empty(self::$data)) {
            self::$data = require __DIR__.'/country_data.php';
        }

        return self::$data;
    }
}