<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\ClientInterface;
use BrokeYourBike\WesternUnion\Models\PingResponse;
use BrokeYourBike\WesternUnion\Models\HoldingBalanceResponse;
use BrokeYourBike\WesternUnion\Models\CustomerResponse;
use BrokeYourBike\WesternUnion\Models\BatchResponse;
use BrokeYourBike\WesternUnion\Interfaces\ConfigInterface;
use BrokeYourBike\ResolveUri\ResolveUriTrait;
use BrokeYourBike\HttpEnums\HttpMethodEnum;
use BrokeYourBike\HttpClient\HttpClientTrait;
use BrokeYourBike\HttpClient\HttpClientInterface;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class Client implements HttpClientInterface
{
    use HttpClientTrait;
    use ResolveUriTrait;

    private ConfigInterface $config;

    public function __construct(ConfigInterface $config, ClientInterface $httpClient)
    {
        $this->config = $config;
        $this->httpClient = $httpClient;
    }

    public function getConfig(): ConfigInterface
    {
        return $this->config;
    }

    public function ping(): PingResponse
    {
        $response = $this->performRequest(HttpMethodEnum::GET, 'Ping', []);
        return new PingResponse($response);
    }

    public function getCustomer(): CustomerResponse
    {
        $response = $this->performRequest(HttpMethodEnum::GET, "customers/{$this->config->getClientId()}", []);
        return new CustomerResponse($response);
    }

    public function getHoldingBalance(string $currencyCode): HoldingBalanceResponse
    {
        $response = $this->performRequest(HttpMethodEnum::GET, "HoldingBalance/{$this->config->getClientId()}/{$currencyCode}", []);
        return new HoldingBalanceResponse($response);
    }

    public function getBatch(string $batchId): BatchResponse
    {
        $response = $this->performRequest(HttpMethodEnum::GET, "customers/{$this->config->getClientId()}/batches/{$batchId}", []);
        return new BatchResponse($response);
    }

    public function createBatch(string $batchId, string $reference): ResponseInterface
    {
        return $this->performRequest(HttpMethodEnum::PUT, "customers/{$this->config->getClientId()}/batches/{$batchId}", [
            'reference' => $reference,
        ]);
    }

    public function deleteBatch(string $batchId): ResponseInterface
    {
        return $this->performRequest(HttpMethodEnum::DELETE, "customers/{$this->config->getClientId()}/batches/{$batchId}", []);
    }

    /**
     * @param HttpMethodEnum $method
     * @param string $uri
     * @param array<mixed> $data
     * @return ResponseInterface
     */
    private function performRequest(HttpMethodEnum $method, string $uri, array $data): ResponseInterface
    {
        $options = [
            \GuzzleHttp\RequestOptions::HEADERS => [
                'Accept' => 'application/json',
            ],
            \GuzzleHttp\RequestOptions::CERT => [
                $this->config->getCertificatePath(),
                $this->config->getCertificatePassword()
            ],
        ];

        $option = match ($method) {
            HttpMethodEnum::GET => \GuzzleHttp\RequestOptions::QUERY,
            default => \GuzzleHttp\RequestOptions::JSON,
        };

        $options[$option] = $data;

        $uri = (string) $this->resolveUriFor($this->config->getUrl(), $uri);
        return $this->httpClient->request($method->value, $uri, $options);
    }
}
