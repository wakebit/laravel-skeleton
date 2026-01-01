<?php

declare(strict_types=1);

use Rector\Config\Level\CodeQualityLevel;
use Rector\Config\Level\CodingStyleLevel;
use Rector\Config\Level\DeadCodeLevel;
use Rector\Config\Level\TypeDeclarationLevel;
use Rector\Config\RectorConfig;
use Rector\Php81\Rector\Array_\FirstClassCallableRector;
use Rector\PHPUnit\PHPUnit100\Rector\Class_\StaticDataProviderClassMethodRector;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/bootstrap/app.php',
        __DIR__ . '/config',
        __DIR__ . '/database/migrations',
        __DIR__ . '/database/seeders',
        __DIR__ . '/public/index.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php83: true)
    ->withPreparedSets(
        rectorPreset: true,
        phpunitCodeQuality: true,
    )
    ->withDeadCodeLevel(count(DeadCodeLevel::RULES))
    ->withTypeCoverageLevel(count(TypeDeclarationLevel::RULES))
    ->withCodeQualityLevel(count(CodeQualityLevel::RULES))
    ->withCodingStyleLevel(count(CodingStyleLevel::RULES))
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_100,
    ])
    ->withAttributesSets(phpunit: true)
    ->withRules([
        StaticDataProviderClassMethodRector::class,
    ])
    ->withSkip([
        \Rector\Php81\Rector\Array_\ArrayToFirstClassCallableRector::class,
    ]);
