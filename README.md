<div align="center">
    <p>
        <h1>Cache TTL Helper</h1>
        Helper Enum for handling cache TTLs in a simple, easy and friendly way
    </p>
</div>

<p align="center">
<a href="https://packagist.org/packages/WendellAdriel/cache-ttl-helper"><img src="https://img.shields.io/packagist/v/WendellAdriel/cache-ttl-helper.svg?style=flat-square" alt="Packagist"></a>
<a href="https://packagist.org/packages/WendellAdriel/cache-ttl-helper"><img src="https://img.shields.io/packagist/php-v/WendellAdriel/cache-ttl-helper.svg?style=flat-square" alt="PHP from Packagist"></a>
<a href="https://github.com/WendellAdriel/cache-ttl-helper/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/WendellAdriel/cache-ttl-helper/tests.yml?branch=main&label=Tests"> </a>
</p>

## Installation

```bash
composer require wendelladriel/cache-ttl-helper
```

## Usage

This package provides a simple Enum class with some helper methods to handle cache TTLs in a simple, easy and friendly way.

All methods are static, and they all return the TTL in seconds.

### Methods available

```php
use WendellAdriel\CacheTtlHelper\CacheTTL;

CacheTTL::second(); // 1s
CacheTTL::seconds(30); // 30s

CacheTTL::minute(); // 60s
CacheTTL::minutes(5); // 300s

CacheTTL::hour(); // 3600s
CacheTTL::hours(2); // 7200s

CacheTTL::day(); // 86400s
CacheTTL::days(3); // 259200s

CacheTTL::week(); // 604800s
CacheTTL::weeks(2); // 1209600s

CacheTTL::month(); // 2592000s
CacheTTL::months(6); // 15552000s

CacheTTL::year(); // 31536000s
CacheTTL::years(2); // 63072000s
```

## Credits

- [Wendell Adriel](https://github.com/WendellAdriel)
- [All Contributors](../../contributors)

## Contributing

Check the **[Contributing Guide](CONTRIBUTING.md)**.
