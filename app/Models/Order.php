<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'client_name', 'client_city', 'flower_id', 'delivery_branch_id', 'recipient_name',
        'delivery_date', 'price', 'delivery_address', 'is_paid', 'paying_branch_id'];

    public $timestamps = false;
}
