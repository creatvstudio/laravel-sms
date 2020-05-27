# A Laravel package for send SMS with multiple driver.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creatvstudio/laravel-sms.svg?style=flat-square)](https://packagist.org/packages/creatvstudio/laravel-sms)
[![Total Downloads](https://img.shields.io/packagist/dt/creatvstudio/laravel-sms.svg?style=flat-square)](https://packagist.org/packages/creatvstudio/laravel-sms)

## Installation

You can install the package via composer:

```bash
composer require creatvstudio/laravel-sms
```

## Usage

``` php
SMS::send('+6344444444', 'Your sms message.');
```

## Using Log driver

``` php
SMS::driver('log')->send('+6344444444', 'Your sms message.');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email jeff@creatvstudio.ph instead of using the issue tracker.

## Credits

- [Jeffrey Naval](https://github.com/jeffreynaval)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).