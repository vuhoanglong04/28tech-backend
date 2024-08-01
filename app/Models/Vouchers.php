<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "discounts",
        "date_start",
        "date_expire"
    ];
}
