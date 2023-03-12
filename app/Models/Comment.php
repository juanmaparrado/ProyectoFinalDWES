<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'product_id',
    ];
    protected $guarded = [
        '_token',
    ];
    protected $hidden = [
        'created_at',
        'Updated_at',
    ]; 

    public function products()
    {
        return $this->belongsTo(Product::class, 'id');
    }
}
