<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnorrRecipe extends Model
{
    const CATEGORY = [
        'meet' => 1,
        'seafood' => 2,
        'vegetable' => 3
    ];
    protected $table = 'knorr_recipe';
}
