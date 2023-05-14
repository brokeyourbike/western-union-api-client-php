# western-union-api-client

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/western-union-api-client-php)](https://github.com/brokeyourbike/western-union-api-client-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/western-union-api-client/downloads)](https://packagist.org/packages/brokeyourbike/western-union-api-client)
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

$apiClient = new Client($config, $httpClient);
$apiClient->ping();
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/western-union-api-client-php/blob/main/LICENSE)
