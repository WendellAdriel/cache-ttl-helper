<?php

declare(strict_types=1);

use WendellAdriel\CacheTtlHelper\CacheTTL;

it('returns ttl for seconds')
    ->expect(CacheTTL::SECOND->value)->toBe(CacheTTL::second())
    ->and(CacheTTL::SECOND->value * 30)->toBe(CacheTTL::seconds(30));

it('returns ttl for minutes')
    ->expect(CacheTTL::MINUTE->value)->toBe(CacheTTL::minute())
    ->and(CacheTTL::MINUTE->value * 5)->toBe(CacheTTL::minutes(5));

it('returns ttl for hours')
    ->expect(CacheTTL::HOUR->value)->toBe(CacheTTL::hour())
    ->and(CacheTTL::HOUR->value * 2)->toBe(CacheTTL::hours(2));

it('returns ttl for days')
    ->expect(CacheTTL::DAY->value)->toBe(CacheTTL::day())
    ->and(CacheTTL::DAY->value * 3)->toBe(CacheTTL::days(3));

it('returns ttl for weeks')
    ->expect(CacheTTL::DAY->value * 7)->toBe(CacheTTL::week())
    ->and(CacheTTL::DAY->value * 7 * 2)->toBe(CacheTTL::weeks(2));

it('returns ttl for months')
    ->expect(CacheTTL::DAY->value * 30)->toBe(CacheTTL::month())
    ->and(CacheTTL::DAY->value * 30 * 2)->toBe(CacheTTL::months(2));

it('returns ttl for years')
    ->expect(CacheTTL::DAY->value * 365)->toBe(CacheTTL::year())
    ->and(CacheTTL::DAY->value * 365 * 2)->toBe(CacheTTL::years(2));
