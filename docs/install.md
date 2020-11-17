# Installation

Create a new Laravel App:

```bash
laravel new PROJECTNAME
```

or

```bash
composer create-project --prefer-dist laravel/laravel PROJECTNAME
```

next require the package with composer:

```bash
composer require xivdata/xivapi-laravel
```

## Optional Steps

To enable a global Facade you can add XIVAPI to the ``config/app.php``:

```php
'providers' => [
    // other package providers
    XIVDATA\XIVDATA::class,
],
```

```php
'aliases' => [
    // other Aliases for Facades
    'XIVAPI' => XIVAPI\XIVAPI::class,
],
```