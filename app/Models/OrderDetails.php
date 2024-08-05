<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        "class_id",
        "order_id",
        "course_id",
        "price"
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
