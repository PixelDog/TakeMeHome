# Pet Search

[![Build Status](https://travis-ci.org/pixel-dog/pet-search.svg?branch=master)](https://travis-ci.org/pixel-dog/pet-search)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pixel-dog/pet-search/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pixel-dog/pet-search/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/pixel-dog/pet-search/badge.svg?branch=master)](https://coveralls.io/github/pixel-dog/pet-search?branch=master)

[![Packagist](https://img.shields.io/packagist/v/pixel-dog/pet-search.svg)](https://packagist.org/packages/pixel-dog/pet-search)
[![Packagist](https://poser.pugx.org/pixel-dog/pet-search/d/total.svg)](https://packagist.org/packages/pixel-dog/pet-search)
[![Packagist](https://img.shields.io/packagist/l/pixel-dog/pet-search.svg)](https://packagist.org/packages/pixel-dog/pet-search)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require pixel-dog/pet-search
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
PixelDog\PetSearch\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
PixelDog\PetSearch\Facades\PetSearch::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="PixelDog\PetSearch\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email kaozotto@gmail.com
instead of using the issue tracker.

## Credits

- [Keith Otto](https://github.com/pixel-dog/pet-search)
- [All contributors](https://github.com/pixel-dog/pet-search/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
