<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'total',
        'payment_method',
        'user_id',
    ];
    protected $guarded = [
        '_token',
    ]; 

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
