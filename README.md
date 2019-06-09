# Behance PHP Client

[![Build Status](https://img.shields.io/travis/plients/Behance-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Behance-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/behance.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Behance-PHP-Client.svg?style=flat-square)](https://github.com/plients/Behance-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Behance-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Behance-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/behance
```

## Usage

```php
$client = new Plients\Behance\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
