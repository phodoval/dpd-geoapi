<?php
namespace Phodoval\DpdGeoApi;

use GuzzleHttp;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class Client {
    protected GuzzleHttp\Client $transport;

    /**
     * @param string               $apiKey
     * @param bool                 $testing
     * @param array<string, mixed> $options Additional Guzzle options
     */
    public function __construct(
        private readonly string $apiKey,
        private readonly bool $testing = false,
        private readonly array $options = [],
    ) {
        $this->transport = new GuzzleHttp\Client([
            'base_uri' => $this->testing ? 'https://geoapi-test.dpd.cz/' : 'https://geoapi.dpd.cz/',
            'headers' => [
                'Accept' => 'application/json',
                'x-api-key' => $this->apiKey,
                'User-Agent' => 'Inhouse Development',
            ]
        ] + $this->options);
    }

    public function parcels(): Namespaces\Parcels {
        return new Namespaces\Parcels($this);
    }

    public function shipments(): Namespaces\Shipments {
        return new Namespaces\Shipments($this);
    }

    /**
     * @param string                    $method
     * @param string                    $uri
     * @param array<string, mixed>|null $data
     * @param array<string, mixed>|null $query
     * @return array<array<string, mixed>>|array<string, mixed>|string
     * @throws GuzzleException|JsonException
     */
    public function request(string $method, string $uri, array $data = null, array $query = null): array|string {
        $options = [
            'query' => $query,
        ];

        if (!empty($data)) {
            $options['json'] = $data;
        }

        $uri = 'v1/' . $uri;

        $response = $this->transport->request($method, $uri, $options);
        if ($response->getBody()->getSize() === 0) {
            return [];
        }

        // check if response is json
        if ($response->getHeader('Content-Type')[0] !== 'application/json') {
            return $response->getBody()->getContents();
        }

        /**
         * @var array<string, mixed>|null $data
         */
        $data = json_decode($response->getBody()->getContents(), true, flags: JSON_THROW_ON_ERROR);

        if ($data === null) {
            return [];
        }

        return $data;
    }
}