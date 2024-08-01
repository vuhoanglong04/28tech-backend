<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
