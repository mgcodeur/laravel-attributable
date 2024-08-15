# This is my package laravel-attributes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mgcodeur/laravel-attributes.svg?style=flat-square)](https://packagist.org/packages/mgcodeur/laravel-attributes)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mgcodeur/laravel-attributes/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mgcodeur/laravel-attributes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mgcodeur/laravel-attributes/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mgcodeur/laravel-attributes/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mgcodeur/laravel-attributes.svg?style=flat-square)](https://packagist.org/packages/mgcodeur/laravel-attributes)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-attributes.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-attributes)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require mgcodeur/laravel-attributes
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-attributes-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-attributes-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-attributes-views"
```

## Usage

```php
$laravelAttributes = new Mgcodeur\LaravelAttributes();
echo $laravelAttributes->echoPhrase('Hello, Mgcodeur!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [mgcodeur](https://github.com/mgcodeur)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Draft

### Table `product`

| id  | name | description         | category_id | created_at          | updated_at          |
|-----|------|---------------------|-------------|---------------------|---------------------|
| 1   | USB  | USB Drive 64 GB      | 1           | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 2   | USB  | USB Drive 2 GB       | 1           | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |

### Table `category`

| id  | name           | parent_id |
|-----|----------------|-----------|
| 1   | PC Accessories | NULL      |
| 2   | Storage        | 1         |

### Table `attribute`

| id  | name     |
|-----|----------|
| 1   | Color    |
| 2   | Capacity |

### Table `attribute_value`

| id  | attribute_id | value  |
|-----|--------------|--------|
| 1   | 1            | Blue   |
| 2   | 1            | Red    |
| 3   | 2            | 64 GB  |
| 4   | 2            | 2 GB   |

### Table `model_variant`

| id  | model_id | model_type             | price | stock | sku       | created_at          | updated_at          |
|-----|----------|------------------------|-------|-------|-----------|---------------------|---------------------|
| 1   | 1        | App\Models\Product     | 1.00  | 20    | USB-B-64  | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 2   | 1        | App\Models\Product     | 1.20  | 15    | USB-R-64  | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |
| 3   | 2        | App\Models\Product     | 0.50  | 0     | USB-R-2   | 2024-08-15 12:00:00 | 2024-08-15 12:00:00 |

### Table `model_variant_attribute`

| id  | model_variant_id | attribute_value_id |
|-----|------------------|--------------------|
| 1   | 1                | 1                  |  // Color: Blue
| 2   | 1                | 3                  |  // Capacity: 64 GB
| 3   | 2                | 2                  |  // Color: Red
| 4   | 2                | 3                  |  // Capacity: 64 GB
| 5   | 3                | 2                  |  // Color: Red
| 6   | 3                | 4                  |  // Capacity: 2 GB
