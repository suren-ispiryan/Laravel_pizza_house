<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'pizza_id',
        // db column names
    ];
}
