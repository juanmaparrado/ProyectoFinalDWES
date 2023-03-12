<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    protected $guarded = [
        '_token',
    ]; 

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }
}
