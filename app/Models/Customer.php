<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ([
        'name',
        'email',
        'phone_number',
        'address',
    ]);

    public function orders()
    {
        return $this->HasMany(Order::class);
    }
}
