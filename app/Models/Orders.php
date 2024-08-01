<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        "receiver_name",
        "contact_phone",
        "address",
        "voucher_code",
        "delivery_id",
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
    public function delivery()
    {
        return $this->belongsTo(Deliveries::class, 'delivery_id', 'id');
    }
}
