# western-union-api-client

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/western-union-api-client-php)](https://github.com/brokeyourbike/western-union-api-client-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/western-union-api-client/downloads)](https://packagist.org/packages/brokeyourbike/western-union-api-client)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/western-union-api-client-php/blob/main/LICENSE)
[![tests](https://github.com/brokeyourbike/western-union-api-client-php/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/western-union-api-client-php/actions/workflows/tests.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/54e09f48f684cd91a447/maintainability)](https://codeclimate.com/github/brokeyourbike/western-union-api-client-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/54e09f48f684cd91a447/test_coverage)](https://codeclimate.com/github/brokeyourbike/western-union-api-client-php/test_coverage)

Western Union API Client for PHP

## Installation

```bash
composer require brokeyourbike/western-union-api-client
```

## Usage

```php
use BrokeYourBike\WesternUnion\Client;
use BrokeYourBike\WesternUnion\Interfaces\ConfigInterface;

assert($config instanceof ConfigInterface);
assert($httpClient instanceof \GuzzleHttp\ClientInterface);
assert($psrCache instanceof \Psr\SimpleCache\CacheInterface);

$apiClient = new Client($config, $httpClient, $psrCache);
$apiClient->fetchAuthTokenRaw();
```

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/western-union-api-client-php/blob/main/LICENSE)
