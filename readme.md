# laravel-smartsms

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

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
In your class or applicable file, just include the SmartSms class like so:

```
use BJTheCod3r\SmartSms\SmartSms;
```
In your function you can then use this
```
$smartSms = new SmartSms();

// This would send sms to the specified number. `sender` is optional. When `sender` is not set, it picks the default.
return $smartSms->sendSms("080xxxxxxxx", "Testing sms", "sender")->send();
```

```
// You can also specify multiple phone numbers separated with comas.
return $smartSms->sendSms("080xxxxxxxx, 080xxxxxxxx", "Testing sms")->send();
```

```
//You can change default route, type. You can add schedule, dlr, ref_id
return $smartSms->sendSms("080xxxxxxxx", "Testing sms")->route(0)->send();
```
A successful response should look like this
```
{
    "success": true,
    "response": {
        "code": "1000",
        "successful": "234802XXXXXXXX",
        "basic_successful": "234802XXXXXXXX",
        "corp_successful": "",
        "simserver_successful": "",
        "simserver_shared": "",
        "simserver_failed": "",
        "simserver_distribution": [],
        "failed": "",
        "flooding": "",
        "insufficient_unit": "",
        "invalid": "",
        "all_numbers": "234802XXXXXXXX",
        "nondnd_numbers": "234802XXXXXXXX",
        "dnd_numbers": "",
        "units_used": 1.5,
        "units_calculated": 1.5,
        "basic_units": 0,
        "corp_units": 0,
        "units_before": "37.71",
        "units_after": "36.21",
        "sms_pages": 1,
        "simhost": "",
        "message_id": "msg-20210409-dmbhW8E331WoJAdDaIzJj4IvElUMa7kBWXYfTVF",
        "ref_id": null,
        "comment": "Completed Successfully"
    }
}
```
```
//Check balance with
return $smartSms->checkBalance();
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

[link-packagist]: https://packagist.org/packages/bjthecod3r/laravel-smartsms
[link-downloads]: https://packagist.org/packages/bjthecod3r/laravel-smartsms
[link-author]: https://github.com/bjthecod3r
[link-contributors]: ../../contributors
