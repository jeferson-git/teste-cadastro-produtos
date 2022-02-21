<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'products_x_tags')->withPivot(['amount']);
    }
}
