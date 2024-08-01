<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserReviews extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        "user_id",
        "course_id",
        "order_detail_id",
        "stars",
        "comments"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
