<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        "voucher_code",
        "total",
        'payment_gate',
        "status"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function voucher()
    {
        return $this->belongsTo(Vouchers::class, 'voucher_code', 'code');
    }
    public function reviews()
    {
        return $this->hasManyThrough(UserReviews::class, OrderDetails::class, 'order_id', 'order_detail_id');
    }
   
}
