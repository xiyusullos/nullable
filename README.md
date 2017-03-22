# Nullable - Chain calls on Null  for PHP

## Installation

Install the latest version with

```bash
composer require xiyusullos/nullable
```

## Usage

### Basic Usage

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

### Laravel Usage

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use xiyusullos\Nullable;

class Profile extends Model
{
    // supposed an attribute of departmentName
    use Nullable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ...
}

class User extends Model
{
    use Nullable;

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // ...
 }

class Blog extends Model
{
    use Nullable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ...
}

// wanna get the writer's department name who posted the blog #1

// without Nullable
$blog = Blog::find(1);
$user = $blog->user;
if ($user) {
    $profile = $user->profile;
    if ($profile) {
        $departmentName = (string) $profile->departmentName;
    }
} // that's so annoying!

// with Nullable
$blog = Blog::find(1);
$departmentName = (string) $blog->user->profile->departmentName;
```

## About

### Author

[xiyusullos](http://xy-jit.cc)

### License

`Nullable` is licensed under the MIT License - see the `LICENSE` file for details
