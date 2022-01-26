<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\WesternUnion\Tests;

use Psr\Http\Message\ResponseInterface;
use BrokeYourBike\WesternUnion\Models\CustomerResponse;
use BrokeYourBike\WesternUnion\Interfaces\ConfigInterface;
use BrokeYourBike\WesternUnion\Client;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class GetCustomerTest extends TestCase
{
    private string $certPath = 'cert.path';
    private string $certPassword = 'pass1234';
    private string $clientId = '56876';

    /** @test */
    public function it_can_prepare_request(): void
    {
        $mockedConfig = $this->getMockBuilder(ConfigInterface::class)->getMock();
        $mockedConfig->method('getUrl')->willReturn('https://api.example/');
        $mockedConfig->method('getClientId')->willReturn($this->clientId);
        $mockedConfig->method('getCertificatePath')->willReturn($this->certPath);
        $mockedConfig->method('getCertificatePassword')->willReturn($this->certPassword);

        $mockedResponse = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $mockedResponse->method('getStatusCode')->willReturn(200);
        $mockedResponse->method('getBody')
            ->willReturn('{
                "id": "string",
                "name": "string"
              }');

        /** @var \Mockery\MockInterface $mockedClient */
        $mockedClient = \Mockery::mock(\GuzzleHttp\Client::class);
        $mockedClient->shouldReceive('request')->withArgs([
            'GET',
            "https://api.example/customers/{$this->clientId}",
            [
                \GuzzleHttp\RequestOptions::HEADERS => [
                    'Accept' => 'application/json',
                ],
                \GuzzleHttp\RequestOptions::CERT => [
                    $this->certPath,
                    $this->certPassword,
                ],
                \GuzzleHttp\RequestOptions::QUERY => [],
            ],
        ])->once()->andReturn($mockedResponse);

        /**
         * @var ConfigInterface $mockedConfig
         * @var \GuzzleHttp\Client $mockedClient
         * */
        $api = new Client($mockedConfig, $mockedClient);
        $response = $api->getCustomer();

        $this->assertInstanceOf(CustomerResponse::class, $response);
    }
}
