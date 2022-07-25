# Query Control Model
Power query controll your model

## Extend Query String Parameterså
```javascript
await axios.get('/api/my-models', {
    params: {
        
        /* Select and Append control */
        
        select: 'id,name',      // <-- select columns
        with: 'items.subItems', // <-- append with relation
        withCount: 'items',     // <-- append relation count
        
        /* Response type control */

        count: true,            // <-- count response
        // or
        paginate: 10,           // <-- pagination count
        page: 1,                // <-- pagination page
        // or
        // default: get()
    }
})
```


## Install

```
composer require laravel-expansions/query-control-model
```


## Auto Setup - Overriding artisan template

Publish to ```/stubs```  template files.
```
php artisan vendor:publish --tag=expansion-qcm-stubs
```

Next create model.
```
php artisan make:model SomeModel --controller --resource
```


## Manual Setup

use QueryControlModel on your model.
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelExpansions\QueryControlModel\Traits\QueryControlModel;// <-- add

class MyModel extends Model
{
    use HasFactory;
    use QueryControlModel;// <-- set

    public function scopeQueryFilter($query)
    {
        return $query;// add your local scopes
    }
}
```

And set scopes on your controller methods.
```php
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MyModel;

class MyModelController extends Controller
{
    public function index()
    {
        return MyModel
        ::queryControll()
        ->queryFilter()
        ->queryGet();
    }

    public function show($id)
    {
        return MyModel
        ::queryControl()
        ->queryFilter()
        ->findOrFail($id);
    }

    ...
}
```
