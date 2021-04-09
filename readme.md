# laravel-smartsms

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A Laravel package for smartsms [https://smartsmssolutions.com]

## Installation

Via Composer

```
$ composer require bjthecod3r/laravel-smartsms
```
If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:

```
BJTheCod3r\SmartSms\SmartSmsServiceProvider::class
```

## Configuration
You can publish the configuration file using this command:

```
php artisan vendor:publish --provider="BJTheCod3r\SmartSms\SmartSmsServiceProvider"
```
A configuration file named `smartsms.php` will be generated and placed in the config directory. You can play around with the default configuration.

## Usage
Open your `.env` file and add this variables. Change to what works for you.

```
SMARTSMS_SENDER_ID=cod3r
SMARTSMS_TOKEN=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
SMARTSMS_TYPE=0
SMARTSMS_ROUTE=3
SMARTSMS_SIMSERVER_TOKEN=xxxxxxxxxxxxxxxxxxxxxxxxxxxx
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Bolaji Ajani][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/bjthecod3r/laravel-smartsms.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/bjthecod3r/laravel-smartsms.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/bjthecod3r/laravel-smartsms/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/bjthecod3r/laravel-smartsms
[link-downloads]: https://packagist.org/packages/bjthecod3r/laravel-smartsms
[link-travis]: https://travis-ci.org/bjthecod3r/laravel-smartsms
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/bjthecod3r
[link-contributors]: ../../contributors
