<?php

namespace Phodoval\DpdGeoApi\Namespaces;

use JsonException;
use Phodoval\DpdGeoApi\Client;
use CuyZ\Valinor\Mapper\MappingError;
use CuyZ\Valinor\MapperBuilder;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractNamespace {
    public function __construct(
        protected Client $client,
    ) {}

    abstract function getNamespace(): string;

    /**
     * @template T of object
     * @param string                       $method
     * @param string                       $endpoint
     * @param string|class-string<T>       $className
     * @param array<string, mixed>|null    $data
     * @param array<string, mixed>|null    $query
     * @return (
     *     $className is class-string<T>
     *         ? T
     *         : ($className is class-string ? object : mixed)
     * )
     * @throws GuzzleException
     * @throws MappingError|JsonException
     */
    protected function request(string $method, string $endpoint, string $className, array $data = null, array $query = null): mixed {
        $data = $this->client->request($method, $this->getNamespace() . $endpoint, $data, $query);

        if (is_string($data)) {
            return $data;
        }

        return $this->map($data, $className);
    }

    /**
     * @template T of object
     * @param array<string, mixed>   $data
     * @param string|class-string<T> $className
     * @return (
     *     $className is class-string<T>
     *         ? T
     *         : ($className is class-string ? object : mixed)
     * )
     * @throws MappingError
     */
    protected function map(array $data, string $className): mixed {
        return (new MapperBuilder())
            ->allowSuperfluousKeys()
            ->mapper()
            ->map($className, $data);
    }
}