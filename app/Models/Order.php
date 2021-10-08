<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ([
        'name',
        'description',
        'price',
        'payment',
        'status',
        'customer_id'
    ]);

    protected $hidden = ([
        'timestamps'
    ]);

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
