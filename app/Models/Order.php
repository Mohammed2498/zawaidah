<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'file', 'id_number', 'name', 'address',
        'piece_number', 'voucher_number', 'subject', 'type', 'phone'
    ];
}
