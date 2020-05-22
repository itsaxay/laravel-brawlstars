Laravel BrawlStars
==============

# \[ 🚧 Work in progress 👷‍♀️⛏👷🔧️👷🔧 🚧 \]

Laravel Searseller was created by, and is maintained by [Axay Gadekar](https://github.com/itsaxay), and is a wrapper package for [BrawlStars](http://seatseller.travel) api.

![Banner](https://repository-images.githubusercontent.com/266194000/7cbada00-9c92-11ea-9f71-61b68d927327)

## Installation

Laravel BrawlStars requires [PHP](https://php.net) 7.4. This particular version supports Laravel 7.11.0.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require axaygadekar/laravel-brawlstars
```

Once installed, if you are not using automatic package discovery, then you need to register the  `Carabostudio\BrawlStars\BrawlStarsServiceProvider` service provider in your `config/app.php`.

You can also optionally alias our facade:

```php
 'BrawlStars' => AxayGadekar\BrawlStars\Facades\BrawlStars::class,
```


## Configuration

Laravel BrawlStars requires connection configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/seatseller.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

There are two config options:

##### BrawlStars version

This option (`'version'`) is where you may specify which of the environment you wish to use as your environment for all work. These will use below credentials for all the work as per environment. The default value for this setting is `'v1'`.

##### BrawlStars credentials

This option (`'credentials'`) is where each of the credentials used for your application.

##### Further Information

You can see wiki for the package [here]().

## Security

If you discover a security vulnerability within this package, please send an email to Axay Gadekar at axayhg@gmail.com. All security vulnerabilities will be promptly addressed. You may view our full security policy [here](https://github.com/carabostudio/laravel-seatseller/security/policy).


## License

Laravel BrawlStars is licensed under [The MIT License (MIT)](LICENSE).
