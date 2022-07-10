# Query Control Model
Response Controling by Request Query

## Setup

Please insttall in an existing Laravel project.
```
composer require laravel-expansions/serverless-function
```

Then use QueryControlModel on your Model.
```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelExpansions\QueryControlModel\Traits\QueryControlModel;// <-- add

class SomeModel extends Model
{
    use HasFactory;
    use QueryControlModel;// <-- set

    /**
     * QueryFilter Example
     */
    public function scopeQueryFilter($query)
    {
        return $query
        // single value pattern
        ->when(request()->query('user'), function($query, $userId) {
            return $query->where('user_id', $userId);
        })
        // multiple value pattern
        ->when(request()->query('post'), function($query, $csv) {
            return $query->whereIn('post_id', explode(',', $csv));
        });
    }
}
```

## Overriding artisan template

Publish to ```/stubs```  template files.
```
php artisan vendor:publish --tag=expansion-qcm-stubs
```

Next create model.
```
php artisan make:model SomeModel --controller --resource
```
