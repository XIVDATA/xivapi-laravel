# XIVAPI Laravel Client

This provides a very simple client to interact with the XIVAPI and obtain dynamic objects in return.  
  
![Packagist Downloads](https://img.shields.io/packagist/dt/xivdata/xivapi-laravel)
![Build](https://github.com/XIVDATA/xivapi-laravel/workflows/Build/badge.svg?branch=master)

## Getting Started

This library requires PHP 7.3+

Install vis composer: https://packagist.org/packages/xivdata/xivapi-laravel

- `composer require xivdata/xivapi-laravel`

### What it does  

The `xivapi-laravel` package is a very simple libary to access XIVAPI.

### Usage Example

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XIVAPI\XIVAPI;

class Example extends Controller
{
    public function foo()
    {
        $api = new XIVAPI();

        $result = $api->character->get('9065567', [$data = 'MIMO']);

        dd($result);
    }
}
```

#### Setting your key if you have one

You can set the environment variable: `XIVAPI_KEY`

#### Documentation

You can find a Documentation on our GitHub Page:  
[xivapi-laravel Documentation](https://xivdata.github.io/xivapi-laravel/)
