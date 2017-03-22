# Nullable - Chain calls on Null  for PHP

## Installation

Install the latest version with

```bash
composer require xiyusullos/nullable
```

## Basic Usage

```php
<?php

use xiyusullos\Nullable;

class Obj
{
    use Nullable;
    
    // ...
}

$obj = new Obj();
echo $obj->a->b->c;
```

## About

### Author

[xiyusullos](http://xy-jit.cc)

### License

`Nullable` is licensed under the MIT License - see the `LICENSE` file for details
