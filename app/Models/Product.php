<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
