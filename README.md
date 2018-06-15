# Dependency injection library

## Description

> This library is just proof of concept. > We do **NOT** recommended the use of production environment.

Provide dependency injection

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Package is available on [Packagist](link-packagist), you can install it using [Composer](http://getcomposer.org).

``` bash
composer require devop-core/dotenv
```

## Usage
.env
```bash
APP_DEBUG=true
APP_NAME="DevOp Studio"
APP_VERSION=null

```

``` php
<?php
include_once '../vendor/autoload.php';

(new DevOp\Core\DotEnv())->load('.env')->toEnv();

var_dump([env('APP_DEBUG'), getenv('APP_DEBUG'), env('APP_NAME')]);
```

## Change log

Please see [CHANGELOG](.github/CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/devop-core/dotenv.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/devop-core/dotenv/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/devop-core/dotenv.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/devop-core/dotenv.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/devop-core/dotenv.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/devop-core/dotenv
[link-travis]: https://travis-ci.org/devop-core/dotenv
[link-scrutinizer]: https://scrutinizer-ci.com/g/devop-core/dotenv/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/devop-core/dotenv
[link-downloads]: https://packagist.org/packages/devop-core/dotenv
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
